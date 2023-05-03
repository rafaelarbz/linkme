//#region block white space  

$("input#userName").on({
    keydown: function(e) {
        if (e.which === 32)
        return false;
    },
    change: function() {
        this.value = this.value.replace(/\s/g, "");
    }
});

$("input#password").on({
    keydown: function(e) {
        if (e.which === 32)
        return false;
    },
    change: function() {
        this.value = this.value.replace(/\s/g, "");
    }
});

$("input#passwordConfirm").on({
    keydown: function(e) {
        if (e.which === 32)
        return false;
    },
    change: function() {
        this.value = this.value.replace(/\s/g, "");
    }
});

//#endregion

//#region validations

function confirmPassword()
{
    var passw1 = document.getElementById('password').value;
    var passw2 = document.getElementById('passwordConfirm').value;
    var message1 = document.getElementById('messagePasswordCofirm');
    var message2 = document.getElementById('messagePassword');
    
    message1.textContent = "";
    message2.textContent = "";

    if (passw1.length < 6 && passw1.length > 0) {
        message2.innerText = "Enter at least 6 digits";
    } else if (passw1 != passw2 && passw1.length > 0) {
        message1.innerText = "Passwords not match";
    }
}

function validationEmail(value) {
    var message = document.getElementById('messageEmail');
    message.textContent = "";
    
    $.ajax({
        url: '../private/Validations/Email.php',
        type: 'POST',
        dataType: 'json',
        data: {'email' : value},
        success: function(data) {
            message.innerText = data.alert;
            document.getElementById('email').setAttribute('status', data.status);
        }
    });
}

function validationUsername(value) {
    var message = document.getElementById('messageUsername');
    message.textContent = "";
    
    $.ajax({
        url: '../private/Validations/Username.php',
        type: 'POST',
        dataType: 'json',
        data: {'username' : value},
        success: function(data) {
            message.innerText = data.alert;
            document.getElementById('username').setAttribute('status', data.status);
        }
    });
}
//#endregion

//#region submit form

const formRegister = document.getElementById('formRegister');

formRegister.addEventListener("submit", (e) => {
    validateForm(e);
}); 

function validateForm(e) {
    e.preventDefault();

    var email = document.getElementById('email');
    var username = document.getElementById('username');
    var passw1 = document.getElementById('password').value;
    var passw2 = document.getElementById('passwordConfirm').value;

    if (email.getAttribute('status') == 'invalid' || username.getAttribute('status') == 'invalid' || passw1.length < 6 || passw1 != passw2) {
        return false;
    } else {
        formRegister.submit();
    }
}

//#endregion
