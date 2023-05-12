<?php
    include '../connetdata.php';
    session_start();
    $_SESSION['tendn'] = $_POST['username'];
    if(isset($_POST["btn_log"]) && $_POST["username"] != '' && $_POST["password"] != '') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM taikhoan WHERE tendn = '$username' AND matkhau = '$password' ";      
        $user = mysqli_query($conn, $sql); 
        if(mysqli_num_rows($user) > 0) {
            header("location: ../Khang_editor/trangChu_view.php");

        } else {
            header("location: loginView.php");
        }
    }
?>