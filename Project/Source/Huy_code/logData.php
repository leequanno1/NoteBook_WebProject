<?php
    include 'database.php';
    if($conn -> connect_error) {
        die("Kết nối không thành công: ". $conn->connect_error);
    } else {
        echo "Kết nối thành công";
        echo "<br>";
    }
    
    if(isset($_POST["btn_log"]) && $_POST["username"] != '' && $_POST["password"] != '') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo "$password";
        echo "<br>";
        $sql = "SELECT * FROM sql_account WHERE username = '$username' AND password = '$password' ";      
        $user = mysqli_query($conn, $sql); 
        if(mysqli_num_rows($user) > 0) {
            echo "Bạn đã đăng nhập thành công";
        } else {
            echo "Bạn đã nhập sai Tài khoản hoặc Mật khẩu";
        }
        $a =mysqli_num_rows($user);
        echo "$a"; echo "<br>";
        echo "$username"; echo "<br>";
        echo "$password"; echo "<br>";
    } else {
        header("location: loginView.php");
    }

    // $result = $conn->query($database, $sql);

    // if(mysqli_num_rows($result) > 0) {
    //     echo "Đăng nhập thành công";
    // } else {
    //     echo "Đăng nhập không thành công";
    // }
?>