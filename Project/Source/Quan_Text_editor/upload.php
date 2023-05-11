<?php
    include "../connetdata.php";
<<<<<<< HEAD
    $tennote = $_GET['tennote'];
    $tendn = $_SESSION['tendn'];
    $noidung =$tendn+"_"+$tennote+".txt";
    if($content && $tendn){
        file_put_contents($file,$content);
=======

    $content = json_decode(file_get_contents("php://input"),true);
    if($content){
        $sql = "UPDATE notes SET noidung = '$content' WHERE tennote = 'note 1'";
        mysqli_query($conn,$sql);
>>>>>>> 42c743cdbcf65f9c07aabade95630de27fb425cb
    }
    $conn->close();
?>