<?php
    include 'database.php';

    if($conn -> connect_error) {
        die("Kết nối không thành công: ". $conn->connect_error);
    } else {
        echo "Kết nối thành công";
        echo "<br>";
    }

    if(isset($_POST["btn_reg"]) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '') {
        echo "Đã submit";
        echo "<pre>";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $phone = $_POST['phone'];
        if($password != $repassword) {
            header("location: registerView.php");
        }
        $sql = "SELECT * FROM sql_account WHERE username='$username' ";
        $old = mysqli_query($conn, $sql);
        echo "$password";
        if(mysqli_num_rows($old) > 0) {
            header("location: registerView.php");
        }
        $sql ="INSERT INTO sql_account (username, password, phone) VALUE ('$username', '$password', '$phone')";
        echo($username); echo "<br>";
        echo($password); echo "<br>";
        echo($repassword); echo "<br>";
        echo($phone); echo "<br>";

        mysqli_query($conn, $sql);
        echo "Đã đăng ký thành công";
        // $sql = "INSERT INTO sql_account (username, password) VALUE ('$username', '$password')";

        // if($password == $repassword) {
        //     $result = $conn->query($sql);
        //     echo "Success";
        // }
        // else {
        //     echo "Error";
        // }

        echo "<pre>";
    } else {
        header("location: registerView.php");
    }

?>