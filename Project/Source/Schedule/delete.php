<?php 
    include "../connetdata.php";
    session_start();
    $tendn = $_SESSION['tendn'];
    // $tendn = "bala";
    $macv = $_POST['macv'];
    $sql = "DELETE FROM `thoikhoabieu` WHERE `tendn` = '$tendn' and `macv` = '$macv'";
    mysqli_query($conn,$sql);
    header("location: ../Khang_editor/trangChu_view.php?");
?>