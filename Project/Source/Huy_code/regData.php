<?php
    include '../connetdata.php';

    if(isset($_POST["btn_reg"]) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $coTK = "SELECT * FROM taikhoan WHERE tendn ='$username'";
        $dangky ="INSERT INTO taikhoan (tendn, matkhau) VALUES ('$username','$password')";
        $old = mysqli_query($conn, $coTK);
        if($password != $repassword || mysqli_num_rows($old) > 0) {
            header("location: registerView.php");
        }
        else{
            mysqli_query($conn, $dangky);
            header("location: ./loginView.php");
        }
    }else{
        header("location: registerView.php");
    }
?>