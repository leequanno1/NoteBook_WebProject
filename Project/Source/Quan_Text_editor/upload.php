<?php
    include "../connetdata.php";
    $tennote = $_GET['tennote'];
    $tendn = $_SESSION['tendn'];
    $noidung =$tendn+"_"+$tennote+".txt";
    if($content && $tendn){
        file_put_contents($file,$content);
    }
    $conn->close();
?>