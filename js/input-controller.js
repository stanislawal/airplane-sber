// var mail = document.getElementById('auth-mail')
// var button_auth = document.getElementById('button-auth')

//#auth-email, #auth-email-confirm
// var mail = $(this).val();
// var mail_confirm = $(this).val()

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

// if (mail.length > 7 && mail_confirm.length <= 7 && password.length <= 5 ){
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


// if (mail.length > 7 | mail_confirm.length > 7 | passwor.length > 5) {
//     $('#button-auth').removeAttr('disabled')
// } else {
//     $('#button-auth').attr('disabled', 'null')
// }


// function active() {
//     if (mail.length > 3){
//         button_auth.removeAttribute("disabled")
//     }
// }
// document.addEventListener("keyup", active);
//

