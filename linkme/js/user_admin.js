//#region validations
function validationEditUsername(username) {
    var message = document.getElementById('messageUsername');
    var usernameInput = document.getElementById('username');
    var userId = usernameInput.getAttribute('userid');
    message.textContent = "";
    $.ajax({
        url: '../private/Validations/Username.php',
        type: 'POST',
        dataType: 'json',
        data: {'usernameEdit' : username, 'userId': userId},
        success: function(data) {
            message.innerText = data.alert;
            document.getElementById('username').setAttribute('status', data.status);
        }
    });
}

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
//#endregion

//#region submit form

const formAccount = document.getElementById('formAccount');

formAccount.addEventListener("submit", (e) => {
    validateForm(e);
}); 

function validateForm(e) {
    e.preventDefault();

    var username = document.getElementById('username');
    var passw1 = document.getElementById('password').value;
    var passw2 = document.getElementById('passwordConfirm').value;
    var message1 = document.getElementById('messagePasswordCofirm');

    if (username.getAttribute('status') == 'invalid') {
        return false;
    } else if (passw1 != passw2) {
        message1.innerText = "New passwords not match";
        return false;
    } else {
        formAccount.submit();
    }
}

//#endregion

//#region links 

function showConfirmDelete(value) {
    var div = document.getElementById(`divHide${value}`);
    div.removeAttribute('style');
}

function hideConfirmDelete(value) {
    var div = document.getElementById(`divHide${value}`);
    div.setAttribute('style', 'display: none');
}

//#endregion

