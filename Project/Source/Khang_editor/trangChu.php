<?php
    include "../connetdata.php";
    session_start();
    if ($_POST['tenNote']) {
        $tenNote = $_POST['tenNote'];
        $username = $_SESSION['username'];
        echo "$tenNote";
        echo "$username";
        $themNote = "INSERT INTO notes (tendn,tennote) VALUES ('$username','$tenNote')";
        mysqli_query($conn,$themNote);
        header("location: ../Quan_Text_editor/index.html");
    }
?>