<?php
    include 'database.php';

    if(isset($_POST["btn_for"]) && $_POST["username"] != '') {
        $username = $_POST['username'];
        $sql = "SELECT * FROM sql_account WHERE username = '$username'";
        $old = mysqli_query($conn, $sql);
        if(mysqli_num_rows($old) > 0) {
            header("location: changePassView.php");
        }
    }
?>