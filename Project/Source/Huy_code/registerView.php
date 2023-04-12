<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registerView.css">
    <title>Register</title>
</head>
<body aria-hidden="false" style="padding: 0px;">
 
    <div id="login-form">

        <form class="creatAccount" action="regData.php" method="post"> 
            <h1 class="title1">Đăng ký </h1> 
            <h3 class="title2">Notebook </h3> <br>
            <div class="content">
                <div class="input-field">
                    <input type="text" name="username" placeholder="Tài Khoản" id="username"> <br>
                </div>
                <div class="input-field">
                    <input type="password" name="password" title="Phải có ít nhất 6 ký tự và tối thiểu 1 chữ thường" placeholder="Mật Khẩu" id="pass1"> <br>
                </div>
                <div class="input-field">
                    <input type="password" name="repassword" title="Phải có ít nhất 6 ký tự và tối thiểu 1 chữ thường" placeholder="Nhập Lại Mật Khẩu" id="pass2"> <br>
                </div>    
                <div class="input-field">
                    <input type="text" name="phone" placeholder="Số điện thoại" id="phone"> <br>
                </div> 
                <input type="submit" class="btn_reg" name="btn_reg" value="Đăng ký">
            </div>
        </form>
    </div>
</body>
</html>