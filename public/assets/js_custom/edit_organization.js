


    // image
    let accountUserImage = document.getElementById('logo-organization');
    const fileInput = document.querySelector('.logo-new');
    // resetFileInput = document.querySelector('.account-image-reset');

    const maxImageSize = 1 * 500 * 500; // Maximum file size of 1MB
    const allowedImageFormats = ['image/jpeg', 'image/png', 'image/jpg']; // Allowed file formats
    // const maxWidth = 500; // Max width
    // const maxHeight = 500; // Max height

    if (accountUserImage) {
        const resetImage = accountUserImage.src;

        fileInput.onchange = () => {
            const file = fileInput.files[0];

            if (file) {
                // Check file size
                if (file.size > maxImageSize) {
                    Swal.fire({
                        title: 'Gagal!',
                        text: 'Ukuran file tidak boleh lebih dari 500KB.',
                        icon: 'error',
                        customClass: {
                            confirmButton: 'btn btn-success'
                        }
                    });
                    fileInput.value = '';
                    return;
                }

                // Check file format
                if (!allowedImageFormats.includes(file.type)) {
                    Swal.fire({
                        title: 'Gagal!',
                        text: 'Hanya format JPEG, PNG, dan JPG yang diperbolehkan.',
                        icon: 'error',
                        customClass: {
                            confirmButton: 'btn btn-success'
                        }
                    });
                    fileInput.value = '';
                    return;
                }

                // Check image dimensions
                    const img = new Image();
                    img.src = window.URL.createObjectURL(file);

                img.onload = function () {
                //     if (img.width > maxWidth || img.height > maxHeight) {
                //         Swal.fire({
                //             title: 'Error!',
                //             text: `Image dimensions should not exceed ${maxWidth}x${maxHeight} pixels.`,
                //             icon: 'error',
                //             customClass: {
                //                 confirmButton: 'btn btn-success'
                //             }
                //         });
                //         fileInput.value = '';
                //         accountUserImage.src = resetImage;
                //     } else {
                //         Valid image
                      
                //     }
                accountUserImage.src = img.src;

                const formData = new FormData();
                formData.append('image', file); 

                // $.ajax({
                //     url: 'ajax-change-profile',
                //     type: 'POST',
                //     data: formData,
                //     processData: false,  
                //     contentType: false,  
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     },
                //     success: function(response) {
                //         toastr.options = {
                //             "progressBar": true,  
                //             "showMethod": "slideDown", 
                //             "hideMethod": "slideUp",  
                //             "timeOut": 5000,        
                //             "closeButton": true,   
                //             "positionClass": "toast-top-right" 
                //         };
                //         if(response.status){
                //             toastr.success(response.message);
                //         }else{
                //             toastr.error(response.message);                            }
                //     },
                //     error: function(xhr, status, error) {
                //         console.error('Error:', error);
                //     }
                //     });
                 };


               
            }
        };
    }

   $('#btn-save').on('click',function(){
  
        const requiredInputs = $('.required');      
        let isValid = true;

        const required = validateRequiredFields('#form-edit');  
        
        if(!required){
            isValid = false;
        }

        const emailField = validateEmailFields('#form-edit');  

        if(!emailField){
            isValid = false;
          }


          var phoneValidasi = phoneNumberValidasi();

          if(!phoneValidasi){
            isValid = false;
          }

          var maxValidasi = maxLengthValidasi();

          if(!maxValidasi){
            isValid = false;
          }

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

   $('#btn-save-schedule').on('click',function(){
  

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
                $('#form-schedule-edit').trigger('submit');
            }
        });
        

   })

   $('#offers_delivery').on('change',function(){
        deliveryChange($(this).is(':checked'));
   })
//    $('#has_storefront').on('change',function(){
//         hasFrontChange($(this).is(':checked'));
//    })

    deliveryChange($('#offers_delivery').is(':checked'));
//     hasFrontChange($('#has_storefront').is(':checked'));


    getRegency(provinceId, regencyId);

    getDistrict(regencyId, districtId);

    const provinceElement = $('#province');
    if (provinceElement.length) {
        provinceElement.change(function () {
            const provinceId = $(this).val();
            $('#district').val(-1).trigger('change')
            if (provinceId) {
                getRegency(provinceId);
            }
        });
    }

    const regencyElement = $('#regency');
    if (regencyElement.length) {
        regencyElement.change(function () {
            const regencyId = $(this).val();
            if (regencyId) {
                getDistrict(regencyId);
            }
        });
    }



function deliveryChange(isChecked) {
  if (isChecked) {
    $('#delivery_note').prop('disabled', false);
    // $('').addClass('required');
  } else {
    $('#delivery_note').prop('disabled', true);
    // $('').removeClass('required');
    // $('').removeClass('is-invalid');    
    $('#delivery_note').val('');
  }
}

// function hasFrontChange(isChecked) {
//   if (isChecked) {
//     $('#open_start, #open_end').prop('disabled', false);
//     $('#open_start, #open_end').addClass('required');
// } else {
//     $('#open_start, #open_end').prop('disabled', true);
//     $('#open_start, #open_end').removeClass('required');
//     $('#open_start, #open_end').removeClass('is-invalid');
//     $('#open_start, #open_end').val('');
//   }
// }


function getRegency(provinceId = null, regencyId = null) {
    if (!Array.isArray(provinceId)) {
        provinceId = [provinceId];
    }
    provinceId = provinceId.map(String);

    const filteredRegencys = regencys.filter(function (regency) {
        return provinceId.includes(String(regency.parent_id));
    });

    const districtElement = $('#regency');
    if (districtElement.length) {

        districtElement.empty().append('<option value="">Pilih</option>');       


        filteredRegencys.forEach(function (regencys) {
            const option = $('<option></option>').val(regencys.id).text(regencys.name);
            if (String(regencys.id) === String(regencyId)) {
                option.prop('selected', true);
            }
            // if (regencyId && String(regencys.id) === String(regencyId)) {
            //     option.prop('selected', true);
            // }
            districtElement.append(option);
        });
    } else {
        console.error('Kab/Kota tidak tersedia.');
    }
}

function getDistrict(regencyId = null, districtId = null) {
    if (!Array.isArray(regencyId)) {
        regencyId = [regencyId];
    }
    regencyId = regencyId.map(String);

    const filteredByDistrict = districts.filter(function (district) {
        return regencyId.includes(String(district.parent_id));
    });

    const subdistrictElement = $('#district');
    if (subdistrictElement.length) {
        // Clear existing options
        subdistrictElement.empty().append('<option value="">Pilih</option>');

        // Add filtered options
        filteredByDistrict.forEach(function (districts) {
            const option = $('<option></option>').val(districts.id).text(districts.name);
            if (String(districts.id) === String(districtId)) {
                option.prop('selected', true);
            }
            subdistrictElement.append(option);
        });
    } else {
        console.error('Kec/Daerta tidak tersedia.');
    }
}