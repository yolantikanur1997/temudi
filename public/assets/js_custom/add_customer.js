


$(document).ready(function () {

   $('#btn-save').on('click',function(){
  
        const requiredInputs = $('.required');      
        let isValid = true;

        const required = validateRequiredFields('#form-add');  
        
        if(!required){
            isValid = false;
        }  

        const emailField = validateEmailFields('#form-add');  

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
                    $('#form-add').trigger('submit');
                }
            });
        }

   })

})