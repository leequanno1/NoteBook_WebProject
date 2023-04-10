<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "account";
    $conn = new mysqli($servername, $username, $password, $database);

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nameInput = $_POST['nameInput'];
        $pw = $_POST['pw'];
        if(isset($nameInput)) {
            $themAccount = "INSERT INTO sql_account (maTK, tenTK, mK) VALUES ('001', '$nameInput', '$pw')";
            mysqli_query($conn, $themAccount);  
        }
        else {
            echo 'Have';
        }
    }
?>