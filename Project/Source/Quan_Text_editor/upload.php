<?php 
    session_start();
    $data = $_POST['data'];
    $file = $_SESSION['file'];
    file_put_contents($file, $data);
    // ../NoteFiles/user1_note2.txt
?>