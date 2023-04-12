<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginView.css">
    <title>Login</title>
</head>

<body aria-hidden="false" style="padding: 0px;">
    <div id="login-form">
        <form action="./logData.php" method="POST">
            <h1 class="title1">Đăng nhập </h1> 
            <h3 class="title2">Notebook </h3> <br>
            <div class="content">
                <div class="input-field">
                    <input type="text" name="username" placeholder="Tài Khoản" id="username"> <br>
                </div>
                <div class="input-field">
                    <input type="password" name="password" placeholder="Mật Khẩu" id="password"> <br>
                </div>
                <div class="Bay-acc">
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"> Nhớ mật khẩu</span> <br>
                </div>
                <a href="#" class="link">Quên mật khẩu?</a> <br>  
                <div class="action">
                    <a href="./registerView.php">Đăng ký</a>
                    <button type="submit" class="btn_log" name="btn_log"> Đăng nhập</button>
                </div>
            </div>        
        </form>
    </div>
</body>
</html>