<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registerView.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <title>Register</title>
</head>
<body>
    <div id="register-form">
        <form class="createAccount" action="regData.php" method="post"> 
            <h1 class="title1">Đăng ký</h1> 
            <h3 class="title2">Notebook</h3><br>
            <div class="content">
                <div class="input-field">
                    <input type="text" name="username" placeholder="Tên đăng nhập" id="username"><br>
                    <p class="tendn_ero">Vui lòng nhập từ 8 đến 20 kí tự</p>
                </div>
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" id="email"> <br>
                    <p class="email_ero">Không được để trống</p>
                </div>
                <div class="btnPass_con input-field">
                    <input type="password" name="password" placeholder="Mật khẩu" id="pass1">
                    <button class="btn-outline-secondary" type="button" id="btnPass">
                        <span class="fas fa-eye"></span>
                    </button>
                    <p class="pass_ero">Vui lòng nhập từ 6 đến 20 kí tự</p>
                </div>
                <div class="btnPass_con input-field">
                    <input type="password" name="repassword" placeholder="Nhập lại mật khẩu" id="pass2">
                    <button class="btn-outline-secondary" type="button" id="btnRePass">
                        <span class="fas fa-eye"></span>
                    </button>
                    <p class="repass_ero">Mật khẩu không trùng</p>
                </div>
                <a href="./loginView.php" class="link">Đã có tài khoản</a> <br>
                <input type="submit" class="btn_reg" name="btn_reg" value="Đăng ký" disabled>
            </div>
        </form>
    </div>
    <script src="./register.js"></script>
</body>
</html>