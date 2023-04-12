<?php
    include 'database.php';    
    if(isset($_POST["btn_log"]) && $_POST["username"] != '' && $_POST["password"] != '') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM sql_account WHERE username = '$username' AND password = '$password' ";      
        $user = mysqli_query($conn, $sql); 
        if(mysqli_num_rows($user) > 0) {
            header("location: ../Khang_editor/trangChu_view.php");
        } else {
            header("location: loginView.php");
        }
    } else {
        header("location: loginView.php");
    }
?>