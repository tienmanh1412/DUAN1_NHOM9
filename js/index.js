function formValidate(){
    var user = document.getElementById("username").value;
    var errorName = document.getElementById("errorName");
    if(user == "" || user == null){
        errorName.innerHTML = "Tên tài khoản không được để trống";
    }else{
        errorName.innerHTML = "";
    }

    var email = document.getElementById("email").value;
    var errorEmail = document.getElementById("errorEmail");
    var regexEmail = /^[A-Za-z0-9](([a-zA-Z0-9,=\.!\-#|\$%\^&\*\+/\?_`\{\}~]+)*)@(?:[0-9a-zA-Z-]+\.)+[a-zA-Z]{2,9}$/;
    if(email == "" || email == null){
        errorEmail.innerHTML = "Email không được để trống";
    }else if(!regexEmail.test(email)){
        errorEmail.innerHTML = "Email không hợp lệ";
    }else{
        errorEmail.innerHTML = "";
    }

    var pass = document.getElementById("password").value;
    var errorPass = document.getElementById("errorPass");
    if(pass == "" || pass == null){
        errorPass.innerHTML = "Mật khẩu không được để trống";
    }else{
        errorPass.innerHTML = "";
    }

    var cfPass = document.getElementById("confirm-password").value;
    var errorConfirmPass = document.getElementById("errorConfirmPass");
    if(cfPass == "" || cfPass == null){
        errorConfirmPass.innerHTML = "Xác nhận mật khẩu không được để trống";
    }else if(cfPass !== pass){
        errorConfirmPass.innerHTML = "Xác nhận mật khẩu không trùng khớp";
    }else{
        errorConfirmPass.innerHTML = "";
    }

    return false;
}