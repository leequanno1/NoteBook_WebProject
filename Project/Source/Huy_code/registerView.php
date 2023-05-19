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
<body aria-hidden="false" style="padding: 0px;">
 
    <div id="register-form">

        <form class="createAccount" action="regData.php" method="post"> 
            <h1 class="title1">Đăng ký </h1> 
            <h3 class="title2">Notebook </h3> <br>
            <div class="content">
                <div class="input-field">
                    <input type="text" name="username" placeholder="Tài Khoản" id="username"> <br>
                </div>
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" id="email" > <br>
                </div>
                <div class="btnPass_con input-field">
                    <input type="password" name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Phải có ít nhất 6 ký tự và tối thiểu 1 chữ thường" placeholder="Mật Khẩu" id="pass1">
                    <button class="btn-outline-secondary" type="button" id="btnPass">
                        <span class="fas fa-eye"></span>
                    </button>
                </div>
                <div class="btnPass_con input-field">
                    <input type="password" name="repassword" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Phải có ít nhất 6 ký tự và tối thiểu 1 chữ thường" placeholder="Nhập Lại Mật Khẩu" id="pass2">
                    <button class="btn-outline-secondary" type="button" id="btnRePass">
                        <span class="fas fa-eye"></span>
                    </button>
                </div>
                <input type="submit" class="btn_reg" name="btn_reg" value="Đăng ký">
            </div>
        </form>
    </div>
    <script>
        const pass1Element =document.querySelector('#pass1');
        const btnPElement =document.querySelector('#btnPass');
        const pass2Element =document.querySelector('#pass2');
        const btnRpElement =document.querySelector('#btnRePass');

        btnPElement.addEventListener('click', function() {
            const currentType = pass1Element.getAttribute('type');
            pass1Element.setAttribute(
                'type',
                currentType === 'password' ? 'text' : 'password'
            )
        })

        btnRpElement.addEventListener('click', function() {
            const currentType = pass2Element.getAttribute('type');
            pass2Element.setAttribute(
                'type',
                currentType === 'password' ? 'text' : 'password'
            )
        })
    </script>
</body>
</html>