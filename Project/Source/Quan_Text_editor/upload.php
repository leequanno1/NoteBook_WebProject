<?php
    include "../connetdata.php";

    $content = json_decode(file_get_contents("php://input"),true);
    if($content){
        $sql = "UPDATE notes SET noidung = '$content' WHERE manote = '01'";
    }
    $conn->close();
?>