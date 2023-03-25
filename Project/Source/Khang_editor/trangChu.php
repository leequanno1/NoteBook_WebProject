<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $database = "notes";
    $nameInput = $_POST['nameInput']; 

    $conn = new mysqli($severname,$username,$password);

    if(isset($nameInput)){
        echo 'Have';
    }
    else{
        $themNote = "INSERT INTO note (maNote,tenNote) VALUES ('001','$nameInput')";
        mysqli_query($conn,$themNote);
    }
?>