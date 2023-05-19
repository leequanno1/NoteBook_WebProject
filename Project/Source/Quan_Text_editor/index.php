<?php
    session_start();
    include "../connetdata.php";
    $tennote = $_SESSION['tennote'];
    $tendn = $_SESSION['tendn'];
    $noidung =$tendn."_".$tennote.".txt";
    $file = "../NoteFiles/".$noidung;
    $_SESSION['file'] = $file;
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
  <div id="editorDiv">
    <form id="container">
      <div id="name_and_button">
        <input type="text" name="" id="tennote" value="<?php 
            echo $tennote;
        ?>"/>
        <button id="submitBtn">Lưu tại đây</button>
        <input type="text" id="hiden_box" value="<?php echo $_SESSION['file'] ?>"/>
      </div>
      <textarea id="editor" class="editor">
        <?php 
          echo file_get_contents($file);
        ?>
      </textarea>
    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>
