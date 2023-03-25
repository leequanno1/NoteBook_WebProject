<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $database = "notes";
    $conn = new mysqli($severname,$username,$password,$database);
    
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nameInput = $_POST['nameInput']; 
        if(isset($nameInput)){
            $themNote = "INSERT INTO note (maNote,tenNote) VALUES ('001','$nameInput')";
            mysqli_query($conn,$themNote);
        }
        else{
            echo 'Have';
        }
    }
?>