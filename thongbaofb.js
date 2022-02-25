function checkForm(){
    var number = document.getElementById('name').value;
    if(isNaN(number)){
        alert("Tài khoản hoặc mật khẩu không đúng.");
    }else{
        alert("Tài khoản hoặc mật khẩu không đúng.")
    }
}