function slideToggle(t,e,o){0===t.clientHeight?j(t,e,o,!0):j(t,e,o)}function slideUp(t,e,o){j(t,e,o)}function slideDown(t,e,o){j(t,e,o,!0)}function j(t,e,o,i){void 0===e&&(e=400),void 0===i&&(i=!1),t.style.overflow="hidden",i&&(t.style.display="block");var p,l=window.getComputedStyle(t),n=parseFloat(l.getPropertyValue("height")),a=parseFloat(l.getPropertyValue("padding-top")),s=parseFloat(l.getPropertyValue("padding-bottom")),r=parseFloat(l.getPropertyValue("margin-top")),d=parseFloat(l.getPropertyValue("margin-bottom")),g=n/e,y=a/e,m=s/e,u=r/e,h=d/e;window.requestAnimationFrame(function l(x){void 0===p&&(p=x);var f=x-p;i?(t.style.height=g*f+"px",t.style.paddingTop=y*f+"px",t.style.paddingBottom=m*f+"px",t.style.marginTop=u*f+"px",t.style.marginBottom=h*f+"px"):(t.style.height=n-g*f+"px",t.style.paddingTop=a-y*f+"px",t.style.paddingBottom=s-m*f+"px",t.style.marginTop=r-u*f+"px",t.style.marginBottom=d-h*f+"px"),f>=e?(t.style.height="",t.style.paddingTop="",t.style.paddingBottom="",t.style.marginTop="",t.style.marginBottom="",t.style.overflow="",i||(t.style.display="none"),"function"==typeof o&&o()):window.requestAnimationFrame(l)})}

let sidebarItems = document.querySelectorAll('.sidebar-item.has-sub');
for(var i = 0; i < sidebarItems.length; i++) {
    let sidebarItem = sidebarItems[i];
	sidebarItems[i].querySelector('.sidebar-link').addEventListener('click', function(e) {
        e.preventDefault();
        
        let submenu = sidebarItem.querySelector('.submenu');
        if( submenu.classList.contains('active') ) submenu.style.display = "block"

        if( submenu.style.display == "none" ) submenu.classList.add('active')
        else submenu.classList.remove('active')
        slideToggle(submenu, 300)
    })
}

window.addEventListener('DOMContentLoaded', (event) => {
    var w = window.innerWidth;
    if(w < 1200) {
        document.getElementById('sidebar').classList.remove('active');
    }
});
window.addEventListener('resize', (event) => {
    var w = window.innerWidth;
    if(w < 1200) {
        document.getElementById('sidebar').classList.remove('active');
    }else{
        document.getElementById('sidebar').classList.add('active');
    }
});

document.querySelector('.burger-btn').addEventListener('click', () => {
    document.getElementById('sidebar').classList.toggle('active');
})
document.querySelector('.sidebar-hide').addEventListener('click', () => {
    document.getElementById('sidebar').classList.toggle('active');

})


// Perfect Scrollbar Init
if(typeof PerfectScrollbar == 'function') {
    const container = document.querySelector(".sidebar-wrapper");
    const ps = new PerfectScrollbar(container, {
        wheelPropagation: false
    });
}

// Scroll into active sidebar
// document.querySelector('.sidebar-item.active').scrollIntoView(false);

$(document).ready(function () {
    applyTimePicker();
    formatPrice();

    $('.select2').select2({});
    $('.select2').on('change', function () {
    const val = $(this).val();
    if (val && val !== '') {
        $(this).removeClass('is-invalid');
    }
});
});


function getNotifFailed(message){
    Toastify({
        text: message,
        duration: 3000,
        close:true,
        backgroundColor: "red",
    }).showToast();
}

function maxLengthValidasi(){
    const maxLength = $('.maxlength');
    var isMaxLengthValid = true;
        maxLength.each(function () {
        const maxInput = $(this);
        const maxInputValue = maxInput.val();  
        const maxInputParam = maxInput.data('maxlength');
        const labelMaxInput = maxInput.data('maxlength-label');

            if(maxInputValue.length > maxInputParam){
                isMaxLengthValid = false;
                maxInput.addClass('is-invalid');
                getNotifFailed(`${labelMaxInput} tidak boleh lebih dari ${maxInputParam} karakter`);
            }
        
        });  
    
    return isMaxLengthValid;

}

function phoneNumberValidasi(){
    var inputPhone = $('.phone-format');
    var inputPhoneValue = $('.phone-format').val();
    const phoneRegex = /^[+\-0-9]+$/;
    var isPhoneValid = true;
    
        if (!phoneRegex.test(inputPhoneValue)) {
            isPhoneValid = false;
            inputPhone.addClass('is-invalid');
            getNotifFailed('Nomor telepon hanya boleh berisi karakter "+", "-", dan angka');
        } 
    
        return isPhoneValid;
    
}

function validateEmailFields(contextSelector = 'body') {
    const emailInputs = $(contextSelector).find('input[type="email"]');
    let isValid = true;

    emailInputs.each(function () {
        const input = $(this);
        const value = input.val();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        input.removeClass('is-invalid');

        // hanya validasi jika tidak kosong
        if (value && !emailRegex.test(value)) {
            input.addClass('is-invalid');
            getNotifFailed('Silakan masukkan alamat email yang valid');
            isValid = false;
        }
    });

    return isValid;
}


function applyTimePicker(){
    $('.timepicker').timepicker({
        timeFormat: 'HH:mm',
        interval: 5,
        minTime: '06:00',
        maxTime: '23:30',
        // defaultTime: '08:00',
        startTime: '00:00',
        dynamic: false,
        dropdown: true,
        scrollbar: true
    });  

    

   $('.timepicker').on('input', function () {
        const pattern = /^([01]\d|2[0-3]):([0-5]\d)$/; // format HH:mm
        const isValid = pattern.test(this.value);

        // const $errorEl = $(this).closest('.mb-3').find('.timepicker-error');

        // if (!isValid) {
        //     $errorEl.text('Format waktu harus HH:mm');
        // } else {
        //     $errorEl.text('');
        // }
    });

}


function validateRequiredFields(contextSelector = 'body') {
    const requiredInputs = $(contextSelector).find('.required');
    let isValid = true;

    requiredInputs.each(function () {
        const input = $(this);
        const inputValue = input.val();

        if (inputValue === null || inputValue.trim() === '') {
            isValid = false;
            input.addClass('is-invalid');

            const requiredField = input.data('required');
            if (requiredField) {
                getNotifFailed(`${requiredField} wajib diisi`);
            }
        } else {
            input.removeClass('is-invalid');
        }
    });

    return isValid;
}

function formatPrice() {
    var inputPrice = $('.price-format');

    // Format input as Rupiah on keyup and input
    inputPrice.on('input', function () {
        var value = $(this).val();
        // Remove all non-digit characters
        value = value.replace(/[^\d]/g, '');
        if (value) {
            // Format as Rupiah (thousand separator)
            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            $(this).val(value);
        } else {
            $(this).val("");
        }
    });
}


  document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll("input[type='text'], input[type='email'], input[type='password'], textarea");

    inputs.forEach(function (input) {
      input.addEventListener("focus", function () {
        this.select();
      });
    });
  });