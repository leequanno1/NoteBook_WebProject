<?php
    include 'database.php';

    if(isset($_POST["btn_for"]) && $_POST["username"] != '' && $_POST["newpassword"] != '' && $_POST["renewpassword"] != '') {
        $username = $_POST['username'];
        $newpassword = $_POST['newpassword'];
        $renewpassword = $_POST['renewpassword'];
        $coTK = "SELECT * FROM taikhoan WHERE tendn ='$username'";
        $old = mysqli_query($conn, $coTK);
        if(mysqli_num_rows($old) > 0 && $newpassword == $renewpassword) {
            $sql ="UPDATE taikhoan SET matkhau = '$newpassword' WHERE tendn = '$username' ";
            mysqli_query($conn,$sql);
            header("location: loginView.php");
        }
        else {
            header("location: forgotPassView.php"); 
        }
    }
    else{
        header("location: forgotPassView.php");       
    }
?>