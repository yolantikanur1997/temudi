$(document).ready(function() {
    $('#kategori_table').DataTable({
        processing: true, 
        serverSide: true, 
        ajax: {
            type: 'GET', 
            data: function(d) {
                // d.customFilter = $('#customFilter').val();
            }
        },
        columns: [         
            { data: 'name',
                className: 'redirect-link',
                render: function(data, type, row) {
                    if (type === 'display') {
                        return `<a href="#" class="text-primary edit-kategori-link" 
                        data-id="${row.id}" 
                        data-name="${data}" 
                        data-active="${row.active}" 
                        data-bs-toggle="modal" 
                        data-bs-target="#modalEditKategori">
                        ${data}
                        </a>`;
                    }
            
                    return data;
                } 

            },         
           { 
                data: 'active',
                render: function(data, type, row) {
                    if (data == 1) {
                        return '<span class="badge bg-success">Aktif</span>';
                    } else {
                        return '<span class="badge bg-warning text-dark">Tidak Aktif</span>';
                    }
                    
                }
            },
        
            { data: 'created_at'}, 
            // { 
            //     data: 'action', 
            //     name: 'action', 
            //     orderable: false, 
            //     searchable: false 
            // } 
        ],
        order: [[0, 'desc']], 
        // dom: '<"top d-flex justify-content-between align-items-center"fB>rt<"bottom"lip><"clear">' 
    });

   $('#btn-save').on('click',function(){
  
        const isValid = validateRequiredFields('#modalTambahKategori');  
        

        if(isValid){
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
                    $('#form-add').trigger('submit');
                }
            });
        }

   })


   $(document).on('click', '.edit-kategori-link', function () {
        const id = $(this).data('id');
        const name = $(this).data('name');
        const active = $(this).data('active');
        $('#id_master_product').val(id);      
        $('#nama_master_product_edit').val(name);    

        if (active == 1 || active === true || active === '1') {
            $('#active').prop('checked', true);
        } else {
            $('#active').prop('checked', false);
        }
    });

     $('#btn-edit').on('click',function(){
  
        const isValid = validateRequiredFields('#modalEditKategori');  
        

        if(isValid){
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
                    $('#form-edit').trigger('submit');
                }
            });
        }

   })

});
