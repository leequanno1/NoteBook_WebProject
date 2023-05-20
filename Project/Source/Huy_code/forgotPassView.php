<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forgotPassView.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <title>Quên Mật khẩu</title>
</head>

<body aria-hidden="false" style="padding: 0px;">
    <div id="forgot-form">
        <form class="forgot" action="forPassdata.php" method="post">
            <h1 class="title1">Quên Mật Khẩu </h1> 
            <h3 class="title2">Notebook </h3> <br>
            <div class="content">
                <div class="input-field">
                    <input type="text" name="username" placeholder="Tên đăng nhập" id="username"> <br>
                </div>
                <div class="btnPass_con input-field">
                    <input type="password" name="newpassword" placeholder="Mật khẩu" id="pass1">
                    <button class="btn-outline-secondary" type="button" id="btnPass">
                        <span class="fas fa-eye"></span>
                    </button>
                    <p class="pass_ero">Vui lòng nhập từ 8 đến 20 kí tự</p>
                </div>
                <div class="btnPass_con input-field">
                    <input type="password" name="renewpassword" placeholder="Nhập lại mật khẩu" id="pass2">
                    <button class="btn-outline-secondary" type="button" id="btnRePass">
                        <span class="fas fa-eye"></span>
                    </button>
                    <p class="repass_ero">Mật khẩu không trùng</p>
                </div> <br>
                <input type="submit" class="btn_for" name="btn_for" value="TIếp theo" disabled>
            </div>
        </form>
    </div>
    <script src="./forgot.js"></script>
</body>
</html>