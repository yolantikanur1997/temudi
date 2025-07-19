


$(document).ready(function () {
   
// --- Customer Option Toggle ---
$('input[name="customer_option"]').change(function() {
if ($(this).val() === 'existing') {
    $('#existingCustomerFields').show();
    $('#newCustomerFields').hide();
    $('#customer_id').prop('required', true); // Existing customer required
    // Clear and unrequire new customer fields
    $('#new_customer_name, #new_customer_email, #new_customer_phone, #new_customer_address').prop('required', false).val('');
} else {
    $('#existingCustomerFields').hide();
    $('#newCustomerFields').show();
    $('#customer_id').prop('required', false).val(''); // Unrequire existing customer, clear selection
    // Clear existing customer readonly fields
    $('#existing_customer_email, #existing_customer_phone, #existing_customer_address').val('');
    $('#new_customer_name').prop('required', true); // New customer name required
    // Anda bisa menambahkan validasi required untuk email/phone/address baru sesuai kebutuhan
}
});



$('#customer_id').on('change', function() {
const selectedOption = $(this).find('option:selected');
const customerId = selectedOption.val(); 
const customerEmail = selectedOption.data('email'); 
const customerPhone = selectedOption.data('phone'); 
const customerAddress = selectedOption.data('address'); 
if (customerId) { // Jika ada customer ID yang dipilih (bukan opsi kosong)
    $('#existing_customer_email').val(customerEmail || '');
    $('#existing_customer_phone').val(customerPhone || '');
    $('#existing_customer_address').val(customerAddress || '');
    // $('#existing_customer_address').val(customerAddress || ''); // Aktifkan jika ada data-address
} else {
    // Jika opsi kosong/placeholder yang dipilih, bersihkan semua field
    $('#existing_customer_email').val('');
    $('#existing_customer_phone').val('');
    $('#existing_customer_address').val(''); // Pastikan alamat juga dibersihkan
}
}).trigger('change');

         
let itemIndex = 0;

function cleanPrice(value) {
    return parseFloat((value || "").replace(/[^\d]/g, "")) || 0;
}

function calculateSubtotal(row) {
    const quantity = parseFloat(row.find('.quantity-input').val()) || 0;
    const unitPrice = cleanPrice(row.find('.unit-price-input').val());
    const subtotal = quantity * unitPrice;

    row.find('.subtotal-output').val(subtotal).trigger('input');
    return subtotal;
}

    function calculateTotalAmount() {
        let subtotalAmount = 0;

        $('#product-items-table-body .product-item').each(function () {
            subtotalAmount += calculateSubtotal($(this));
        });

        // ✅ Hitung Diskon
        const discountType = $('#discount-type').val();
        const discountValue = cleanPrice($('#discount').val());
        let discount = 0;

        if (discountType === 'percentage') {
            discount = (discountValue / 100) * subtotalAmount;
        } else {
            discount = discountValue;
        }

        const finalTotal = Math.max(subtotalAmount - discount, 0);

        // ✅ Tampilkan di UI
        $('#subtotal-display').text(formatPriceVariable(subtotalAmount));
        $('#subtotal-input').val(subtotalAmount);

        $('#total-discount-display').text(formatPriceVariable(discount));
        $('#total-discount-input').val(discount);

        $('#total-amount-display').text(formatPriceVariable(finalTotal));
        $('#total-amount-input').val(finalTotal);
    }



    function loadProductsAndInitSelect2(selectElement, selectedId = '', selectedPrice = 0) {
        $.ajax({
            url: "/products/search",
            method: "GET",
            dataType: "json",
            success: function (data) {
                selectElement.empty().append('<option value="">Pilih Produk</option>');

                $.each(data, function (index, item) {
                    selectElement.append(
                        `<option value="${item.id}" data-price="${item.price}">${item.name}</option>`
                    );
                });

                selectElement.select2({
                    placeholder: "Pilih Produk",
                    allowClear: false,
                    width: '100%'
                });

                // ✅ Set harga otomatis saat select diubah
                selectElement.on('select2:select', function (e) {
                    const price = $(this).find(':selected').data('price') || 0;
                    const row = $(this).closest('.product-item');
                    row.find('.unit-price-input').val(Math.floor(price)).trigger('input');
                    calculateTotalAmount();
                });

                // ✅ Jika ada produk terpilih (misal dari modal), set di sini
                if (selectedId) {
                    selectElement.val(selectedId).trigger('change');
                    // Pastikan harga juga diset (jika belum otomatis)
                    const row = selectElement.closest('.product-item');
                    const price = selectedPrice || selectElement.find(':selected').data('price') || 0;
                    row.find('.unit-price-input').val(Math.floor(price)).trigger('input');
                }
            },
            error: function () {
                alert("Gagal memuat produk.");
            }
        });
    }

    addProductRow();
    
   
    function addProductRow(productId = '', productName = '', productPrice = 0) {
        itemIndex++;
        const newRow = `
            <tr class="product-item" data-item-index="${itemIndex}">
                <td>
                    <select class="form-control form-control-sm product-select" name="product_id[]" style="width: 100%;">
                        <option value="">Pilih Produk</option>
                    </select>
                </td>
                <td><input type="text" class="form-control form-control-sm unit-price-input price-format" name="unit_price[]" value="${productPrice}" required style="text-align:right"></td>
                <td><input type="number" class="form-control form-control-sm quantity-input" name="quantity[]" value="1" min="1" required style="text-align:right"></td>
                <td><input type="text" class="form-control form-control-sm subtotal-output price-format" value="${productPrice}" readonly style="text-align:right" name="sub_total[]"></td>
                <td><button type="button" class="btn btn-danger btn-sm remove-item-btn"><i class="bi bi-dash-circle"></i></button></td>
            </tr>`;
        
        const $row = $(newRow);
        $('#product-items-table-body').append($row);

        // ✅ Init Select2 seperti biasa
        const selectElement = $row.find('.product-select');
        loadProductsAndInitSelect2(selectElement, productId, productPrice);

        // ✅ Format harga & total
        formatPrice();
        calculateTotalAmount();
    }


    // --- Inisialisasi pertama ---
    calculateTotalAmount();

    // --- Event Listeners ---
    $('#add-product-row').click(addProductRow);

    $('#product-items-table-body').on('input', '.quantity-input, .unit-price-input', calculateTotalAmount);

    $('#product-items-table-body').on('click', '.remove-item-btn', function () {
        $(this).closest('.product-item').remove();
        calculateTotalAmount();
        // if ($('.product-item').length === 1) {
        //     $('.remove-item-btn').hide();
        // }
    });

    $(document).on('input change', '#discount, #discount-type', function () {
        calculateTotalAmount();
    });


    $('#discount-type').on('change', function () {
        const type = $(this).val();
        $('#discount').val('');
        const discountInput = $('#discount');

        if (type === 'percentage') {
            discountInput.removeClass('price-format');
            discountInput.val('').off('input'); // hapus event format rupiah
        } else {
            discountInput.addClass('price-format').trigger('input'); // format ulang Rp
        }
    });

    let productTable;

    // ✅ Open Modal + Init DataTables
    $('#open-product-modal').on('click', function () {
        if ($.fn.DataTable.isDataTable('#product-modal-table')) {
            productTable.ajax.reload();
        } else {
            productTable = $('#product-modal-table').DataTable({
                processing: true,
                serverSide: false, // ubah ke true kalau backend sudah support server-side
                ajax: {
                    url: "/products/search",
                    dataSrc: ""
                },
                columns: [
                    {
                        data: "id",
                        render: function (data, type, row) {
                            return `<input type="checkbox" class="product-checkbox" data-id="${row.id}" data-name="${row.name}" data-price="${row.price}">`;
                        },
                        orderable: false,
                        searchable: false
                    },
                    { data: "name" },
                    {
                        data: "price",
                        render: function (data) {
                            return parseFloat(data).toLocaleString('id-ID');
                        }
                    }
                ],
                order: [[1, 'asc']]
            });
        }

        $('#productModal').modal('show');
    });


    // Check/Uncheck Semua
    $(document).on('change', '#check-all-products', function () {
        $('.product-checkbox').prop('checked', this.checked);
    });

    $('#select-products-btn').on('click', function () {
            $('.product-checkbox:checked').each(function () {
                const productId = $(this).data('id');
                const productName = $(this).data('name');
                const productPrice = $(this).data('price');

                addProductRow(productId, productName, productPrice);
            });

            $('#productModal').modal('hide');
    });


    function toggleCustomerRequired() {
        if ($('#existingCustomer').is(':checked')) {
            // Existing customer required
            $('#customer_id').addClass('required');
            $('#new_customer_name').removeClass('required');
        } else {
            // New customer required
            $('#customer_id').removeClass('required');
            $('#new_customer_name').addClass('required');          

        }
    }


    // simpan data
    $('.btn-save').on('click', function (e) {
    e.preventDefault();
    const valueButton = $(this).val();
    const requiredInputs = $('.required');
    let isValid = true;

    toggleCustomerRequired();
    const required = validateRequiredFields('#form-add');

    if (!required) {
        isValid = false;
    }

    if ($('#newCustomer').is(':checked')) {
        $('#customer_id').removeClass('is-invalid');

        if ($('#new_customer_phone').val() !== '' && $('#new_customer_phone').val() !== null) {
            var phoneValidasi = phoneNumberValidasi();
            if (!phoneValidasi) {
                isValid = false;
            }
        }

        if ($('#new_customer_email').val() !== '' && $('#new_customer_email').val() !== null) {
            const emailField = validateEmailFields('#form-add');
            if (!emailField) {
                isValid = false;
            }
        }

        var maxValidasi = maxLengthValidasi();
        if (!maxValidasi) {
            isValid = false;
        }
    } else {
        $('#new_customer_name').removeClass('is-invalid');
        $('#new_customer_phone').removeClass('is-invalid');
        $('#new_customer_email').removeClass('is-invalid');
        $('#new_customer_address').removeClass('is-invalid');
    }

    // ✅ Validasi Produk (TAMBAHAN DI SINI)
    const productRows = $('.product-item');
    if (productRows.length === 0) {
        getNotifFailed('Silakan tambahkan minimal satu produk sebelum menyimpan transaksi')
        return;
    }

    let productValid = true;
    productRows.each(function () {
        const productId = $(this).find('.product-select').val();
        const unitPrice = $(this).find('.unit-price-input').val();
        const quantity = $(this).find('.quantity-input').val();
        const subtotal = $(this).find('.subtotal-output').val();

        if (!productId || !unitPrice || !quantity || !subtotal) {
            productValid = false;
            return false; // break each
        }
    });

    if (!productValid) {
        getNotifFailed('Pastikan semua produk memiliki Harga, Jumlah, dan Sub Total sebelum menyimpan transaksi')
        return;
    }

    // ✅ Submit Form Jika Semua Valid
    if (isValid) {
        Swal.fire({
            title: 'Apakah Anda Yakin?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal',
            customClass: {
                confirmButton: 'btn btn-primary me-3',
                cancelButton: 'btn btn-label-secondary'
            },
            buttonsStyling: false
        }).then((value) => {
            if (value.isConfirmed) {

                 $('<input>').attr({
                    type: 'hidden',
                    name: 'save_action',
                    value: valueButton
                }).appendTo('#form-add');

                $('#form-add').trigger('submit');
            }
        });
    }
});


});

