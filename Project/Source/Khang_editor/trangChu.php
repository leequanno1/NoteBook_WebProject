<?php
    include "../connetdata.php";
    session_start();
    if ($_POST['tenNote']) {
        $tenNote = $_POST['tenNote'];
        $tendn = $_SESSION['tendn'];
        $_SESSION['tennote'] = $tenNote;
        $themNote = "INSERT INTO notes (tendn,tennote) VALUES ('$tendn','$tenNote')";
        mysqli_query($conn,$themNote);
        $noidung = $tendn.'_'.$tenNote.'.txt';
        $file = "../NoteFiles/".$noidung;
        $default = "<p>Viết tại đây</p>";
        $note = fopen($file, "w");
        fwrite($note , $default);
        fclose($note);
        header("location: ../Quan_Text_editor/index.php");
    }
?>