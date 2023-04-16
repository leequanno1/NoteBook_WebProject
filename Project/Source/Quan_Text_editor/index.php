<?php
    include "../connetdata.php";
    $get_content = mysqli_query($conn,"SELECT noidung FROM notes WHERE manote = '01'");
    $row = mysqli_fetch_assoc($get_content);
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
        echo $row['noidung'];
      ?>
    </textarea>
    <button id="submitBtn">Lưu</button>
  </form>
  <script src="script.js"></script>
  <script src="eventLTN.js"></script>
</body>
</html>
