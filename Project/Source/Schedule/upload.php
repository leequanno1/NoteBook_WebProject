<?php
    include "../connetdata.php";
    session_start();
    if(isset($_POST['submit'])){
        $tendn = $_SESSION['tendn'];
        // $tendn = 'bala';
        $macv = $_POST["ngay"]."_".$_POST["h_batdau"].".".$_POST["m_batdau"]."_".$_POST["h_ketthuc"].".".$_POST["m_ketthuc"];
        $tieude = $_POST["tieude"];
        $noidung = $_POST["noidung"];
        $batdau = 1+$_POST["h_batdau"]*4+round($_POST["m_batdau"]/15);
        $ketthuc = 1+$_POST["h_ketthuc"]*4+round($_POST["m_ketthuc"]/15);;
        $mau = $_POST["mau"];

        if($tieude == null){

        }
        if($noidung == null){

        }
        $sql = "INSERT INTO `thoikhoabieu`(`tendn`, `macv`, `tieude`, `noidung`, `batdau`, `ketthuc`, `mau`) 
        VALUES ('$tendn','$macv','$tieude','$noidung','$batdau','$ketthuc','$mau')";

        if($tieude == null || $noidung == null){
            if($tieude == null && $noidung == null){
                $sql = "INSERT INTO `thoikhoabieu`(`tendn`, `macv`, `batdau`, `ketthuc`, `mau`) 
                VALUES ('$tendn','$macv','$batdau','$ketthuc','$mau')";
            }else{
                if($tieude == null){
                    $sql = "INSERT INTO `thoikhoabieu`(`tendn`, `macv`, `noidung`, `batdau`, `ketthuc`, `mau`) 
                    VALUES ('$tendn','$macv','$noidung','$batdau','$ketthuc','$mau')";
                }
                else{
                    $sql = "INSERT INTO `thoikhoabieu`(`tendn`, `macv`, `tieude`, `batdau`, `ketthuc`, `mau`) 
                    VALUES ('$tendn','$macv','$tieude','$batdau','$ketthuc','$mau')";
                }
            }
        }
        mysqli_query($conn,$sql);
        header("location: ./Schedule.php?");
    }
?>