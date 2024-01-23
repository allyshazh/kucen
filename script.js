function viewPassword()
{
    var passwordInput = input-box.getElementbyId('password-field');
    var passStatus = input-box.getElementbyId('pass-status');

    if(passwordInput.type == 'password'){
        passwordInput.type = 'text';
        passStatus.className = 'fa fa-eye-slash';
    }
    else{
        passwordInput.type='password';
        passStatus.className='fa fa-eye';
    }
}