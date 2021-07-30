// var mail = document.getElementById('auth-mail')
// var button_auth = document.getElementById('button-auth')

// #auth-email, #auth-email-confirm
// var mail = $(this).val();
// var mail_confirm = $(this).val()



// $('#auth-email').on('input', function () {
//     auth_email = $(this).val();
// });
//
// $('#auth-email-confirm').on('input', function () {
//     auth_email_confirm = $(this).val();
// })
//
// $('#auth-password').on('input', function () {
//      auth_password = $(this).val();
// });
//
// var auth_email = auth_email.length
// var auth_email_confirm = auth_email_confirm.length
// var auth_password = auth_password.length
//
// if ((auth_email > 7) || (auth_email_confirm > 7) || (auth_password > 5)) {
//     $('#button-auth').removeAttr('disabled')
// } else {
//     $('#button-auth').attr('disabled', 'null')
// }

$('#auth-password').on('input', function () {
    var password = $(this).val();
    if (password.length > 5) {
        $('#button-auth').removeAttr('disabled')
    } else {
        $('#button-auth').attr('disabled', 'null')
    }
});

$('#reg-password-confirm').on('input', function () {
    var password = $(this).val();
    if (password.length > 5) {
        $('#button-reg').removeAttr('disabled')
    } else {
        $('#button-reg').attr('disabled', 'null')
    }
});


//
// $('#auth-password').on('input', function () {
//     var password = $(this).val();
//     if (password.length > 5) {
//         $('#button-auth').removeAttr('disabled')
//     } else {
//         $('#button-auth').attr('disabled', 'null')
//     }
// });



// if (mail.length > 7 || mail_confirm.length > 7 || passwor.length > 5) {
//     $('#button-auth').removeAttr('disabled')
// } else {
//     $('#button-auth').attr('disabled', 'null')
// }



// if (mail.length <= 7 && mail_confirm.length > 7 && password.length <= 5){
//     $('#button-auth').attr('disabled', 'null')
// }
// if (mail.length <= 7 && mail_confirm.length <= 7 && password.length > 5){
//     $('#button-auth').attr('disabled', 'null')
// }
//
// if (mail.length > 7 && mail_confirm.length > 7 && password.length > 5){
//     $('#button-auth').removeAttr('disabled')
// }


// $('#auth-email-confirm').on('input', function () {
//     let mail_confirmval = $(this).val();
// })
// $('#auth-password').on('input', function () {
//     let passwordval = $(this).val();
// })



// function active() {
//     if (mail.length > 3){
//         button_auth.removeAttribute("disabled")
//     }
// }
// document.addEventListener("keyup", active);
//

