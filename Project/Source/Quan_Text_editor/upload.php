<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "notes";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    // $content = $_POST['content'];
    $content = json_decode(file_get_contents("php://input"),true);
    if($content){
        $sql = "UPDATE note SET Content = '$content' WHERE maNote = '01'";
        if ($conn->query($sql) === TRUE) {
            echo "Nội dung đã được lưu vào cơ sở dữ liệu.";
        } else {
            echo "Đã xảy ra lỗi khi lưu vào cơ sở dữ liệu: " . $conn->error;
        }
    }
    $conn->close();
?>