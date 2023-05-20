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
                    <input type="password" name="newpassword" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Phải có ít nhất 6 ký tự và tối thiểu 1 chữ thường" placeholder="Mật khẩu" id="pass1">
                    <button class="btn-outline-secondary" type="button" id="btnPass">
                        <span class="fas fa-eye"></span>
                    </button>
                </div>
                <div class="btnPass_con input-field">
                    <input type="password" name="renewpassword" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Phải có ít nhất 6 ký tự và tối thiểu 1 chữ thường" placeholder="Nhập lại mật khẩu" id="pass2">
                    <button class="btn-outline-secondary" type="button" id="btnRePass">
                        <span class="fas fa-eye"></span>
                    </button>
                </div> <br>
                <input type="submit" class="btn_for" name="btn_for" value="TIếp theo">
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