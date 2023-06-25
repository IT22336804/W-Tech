function confirmPassword(){
    
    let pwd = document.getElementById("pwd").value;
    let confirmPwd = document.getElementById("confirmPwd").value;

    if(pwd === confirmPwd){

        return true;
    }
    else{

        alert("Your password does not match, please re-enter");
        return false;
    }
}

