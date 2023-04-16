<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "notes";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }
    $get_content = mysqli_query($conn,"SELECT Content FROM note WHERE maNote = '01'");
    $row = mysqli_fetch_assoc($get_content);
    // $_SESSION['text_content'] = $row['Content'];
    // echo $_SESSION['text_content'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Text Editor</title>
  
  <!-- Nhúng thư viện CKEditor -->
  <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/super-build/ckeditor.js"></script>
  
  <!-- Liên kết file CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form id="container">
    <textarea id="editor" class="editor">
      <?php 
        echo $row['Content'];
      ?>
    </textarea>
    <button id="submitBtn">Lưu</button>
  </form>
  <script src="script.js"></script>
  <script src="eventLTN.js"></script>
</body>
</html>
