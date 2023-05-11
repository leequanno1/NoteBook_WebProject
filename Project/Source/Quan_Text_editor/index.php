<?php
    session_start();
    include "../connetdata.php";
    $tennote = $_GET['tennote'];
    $tendn = $_SESSION['tendn'];
    $noidung =$tendn+"_"+$tennote+".txt";
    $file = "../NoteFile/"+$noidung;
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
  <div id="headerFinderDiv">
  </div>
  <div id="editorDiv">
    <form id="container">
      <input type="text" name="" id="tennote" value="
      <?php 
          echo $tennote;
      ?>">
      <button id="submitBtn">Lưu</button>
      <textarea id="editor" class="editor">
        <?php 
          echo file_get_contents($file);
        ?>
      </textarea>
    </form>
  </div>
  <script src="script.js"></script>
  <script src="eventLTN.js"></script>
</body>
</html>
