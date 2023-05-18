<?php
    include "../connetdata.php";
    session_start();
    if ($_POST['tenNote']){
        $tenNote = $_POST['tenNote'];
        $tendn = $_SESSION['tendn'];
        $sql = "INSERT INTO notes (tendn,tennote) VALUES ('$tendn','$tenNote')";
        mysqli_query($conn,$sql);
        $_SESSION['tennote'] = $tenNote;
        $tenfile = $tendn.'_'.$tenNote.'.txt';
        $file = "../NoteFiles/".$tenfile;
        $default = "<p>Viết tại đây</p>";
        $note = fopen($file, "w");
        fwrite($note,$default);
        fclose($note);
        header("location: ../Quan_Text_editor/index.php");
    }
    else{
        $_SESSION['tennote'] = $_GET['tennote'];
        header("location: ../Quan_Text_editor/index.php");
    }
?>