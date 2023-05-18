<?php
    include "../connetdata.php";
    session_start();
    $tennote = $_GET['tennote'];
    echo $tennote;
    $tendn = $_SESSION['tendn'];
    echo $tendn;
    $sql = "DELETE FROM notes WHERE tendn = '$tendn' AND tennote = '$tennote'";
    $res = mysqli_query($conn,$sql);
    echo $res;
    $tenfile = $tendn.'_'.$tennote.'.txt';
    $file = "../NoteFiles/".$tenfile;
    unlink($file);
    header("location: ./trangChu_view.php");
?>