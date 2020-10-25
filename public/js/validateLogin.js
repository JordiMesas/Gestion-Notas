const validacionForm = () =>{    
        //dom variables
        let emailv = document.getElementById('email').value;
        let passwordv = document.getElementById('psswd').value;
        let message = document.getElementById('message');
        let email = document.getElementById('email');
        let password = document.getElementById('psswd');
        //basic variables
        let border = "1px solid red";
        let init = "1px solid #ccc";
    
        email.style.border = init;
        password.style.border = init;
        message.style.color = 'red';
    
        if (emailv == '' && passwordv == '') {
            message.innerHTML = 'Rellena todos los campo ';
            email.style.border = border;
            password.style.border = border;
        } else if (emailv == '') {
            message.innerHTML = 'Rellena el campo usuario';
            email.style.border = border;
        } else if (passwordv == '') {
            message.innerHTML = 'Rellena el campo contraseña';
            password.style.border = border;
        } else {
            return true;
        }
        return false;

};