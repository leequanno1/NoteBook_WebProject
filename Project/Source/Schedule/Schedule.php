<?php
    include "../connetdata.php";
    session_start();
    $tendn = $_SESSION['tendn'];
    // $tennd = "bala";

    function returnDayString($id){
        $date = substr($id, 0, 2);
        switch ($date) {
            case 'su':
                return "Chủ nhật";
            case 'mo':
                return "Thứ hai";
            case 'tu':
                return "Thứ ba";
            case 'we':
                return "Thứ tư";
            case 'th':
                return "Thứ năm";
            case 'fr':
                return "Thứ sáu";
            case 'sa':
                return "Thứ bảy";
        }
    }

    function returnStarTime($id){
        $first = strpos($id, '_'); 
        $second = strpos($id, '_', $first + 1); 
        $result = substr($id, $first + 1, $second - $first - 1); 
        return $result;
    }

    function returnEndTime($id){
        $first = strpos($id, '_'); 
        $second = strpos($id, '_', $first + 1); 
        $result = substr($id, $second + 1); 
        return $result;
    }

    function returnTimeFloat($string_num){
        return floatval($string_num);
    }

    function toupper($num){
        if($num > intval($num)){
            return intval($num)+1;
        }
        return intval($num);
    }

    function returnGridRows($row){
        $i = 1+ $row*4;
        $j = $i+4;
        return $i."/".$j;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="Schedule.css">
    
</head>
<body>
    <div id="schedule_container">
        <div id="day_name_head">
            <?php 
                $sql_pop = "SELECT * FROM thoikhoabieu WHERE tendn = '".$tennd."'";
                $res = mysqli_query($conn,$sql_pop);
                while($row = mysqli_fetch_assoc($res)){
                    echo "<div id ='".($row['macv'])."_pop"."' class='task_pop' style='visibility: hidden;'>
                    <label >Tiêu đề:</label>
                    <label >".$row['tieude']."</label>
                    <label >Ngày:</label>
                    <label >".returnDayString($row['macv'])."</label>
                    <label >Bắt đầu:</label>
                    <label >".returnStarTime($row['macv'])."</label>
                    <label >Kết thúc:</label>
                    <label >".returnEndTime($row['macv'])."</label>
                    <label >Nội dung:</label>
                    <label >".$row['noidung']."</label>
                    <form action='./delete.php' method='post'>
                        <input type='text' name='macv' value = '".$row['macv']."'>
                        <button type ='submit'> Xóa </button>
                    </form>
                    <button id ='".($row['macv'])."_btn"."' class = 'pop_cancel'> Thoát </button>
                </div>";
                }
            ?>
            <div id="day_name_container" class="schedule">
                <div>
                    <button id="bnt_create_schedule">Tạo công việc</button>
                </div>
                <div id="su" class="day_name"><label for="">Sunday</label></div>
                <div id="mo" class="day_name"><label for="">Monday</label></div>
                <div id="tu" class="day_name"><label for="">Tuesday</label></div>
                <div id="we" class="day_name"><label for="">Wednesday</label></div>
                <div id="th" class="day_name"><label for="">Thursday</label></div>
                <div id="fr" class="day_name"><label for="">Friday</label></div>
                <div id="sa" class="day_name"><label for="">Saturday</label></div>
            </div>

            <div id="create_schedule_popup">
                <form action="./upload.php" method="post">
                    <label for="">Tiêu đề</label>
                    <input type="text" id="tieude" name="tieude">
                    <label for="">Ngày</label>
                    <select name="ngay" id="ngay"></select>
                    <label for="">Giờ bắt đầu</label>
                    <select name="h_batdau" id="h_batdau" class="hours"></select>
                    <select name="m_batdau" id="m_batdau" class="mins"></select>
                    <label for="">Giờ kết thúc</label>
                    <select name="h_ketthuc" id="h_ketthuc" class="hours"></select>
                    <select name="m_ketthuc" id="h_ketthuc" class="mins"></select>
                    <label for="">Màu</label>
                    <select name="mau" id="mau"></select>
                    <div id="div_mau"></div>
                    <label for="">Nội dung</label>
                    <textarea name="noidung" id="noidung" cols="30" rows="3"></textarea>
                    <button name="submit" type="submit">Tạo</button>
                </form>
                <button id="bnt_cancel">Đóng</button>
            </div>
        </div>
                
        <div id="day_content_container" class="schedule">
            <div id="time_name_container" class="day_content">
                <?php 
                    $i = 1;
                    while($i < 97){
                        echo "<label for='' class='time' style='grid-row: ".$i."/".($i + 4)."'>".(($i-1)/4)."</label>";
                        $i+=4;
                    }
                ?>
            </div>
            <div id="su_content" class="day_content">
                <?php 
                    $sql_su = "SELECT * FROM thoikhoabieu WHERE tendn = '".$tennd."' and macv LIKE 'su%' ORDER BY batdau";
                    $res = mysqli_query($conn,$sql_su);
                    $i = 0;
                    while($row = mysqli_fetch_assoc($res)){
                        while(returnTimeFloat(returnStarTime($row['macv'])) - $i >= 1){
                            echo "<div id='su_".$i."' style='grid-row: ".returnGridRows($i)."; border-top: 1px solid; border-bottom: 1px solid; background: white;'></div>";
                            $i++;
                        }
                        echo "<button id='".$row['macv']."' class='task' style='grid-row: ".$row['batdau']. "/" .$row['ketthuc']."; background: ".$row['mau'].";'>".$row['tieude']."</button>";
                        $i = toupper(returnTimeFloat(returnEndTime($row['macv'])));
                    }
                    while($i < 24){
                        echo "<div id='su_".$i."' style='grid-row: ".returnGridRows($i)."; border-top: 1px solid; border-bottom: 1px solid; background: white;'></div>";
                        $i++;
                    }
                ?>
            </div>
            <div id="mo_content" class="day_content">
            <?php 
                    $sql_mo = "SELECT * FROM thoikhoabieu WHERE tendn = '".$tennd."' and macv LIKE 'mo%' ORDER BY batdau";
                    $res = mysqli_query($conn,$sql_mo);
                    $i = 0;
                    while($row = mysqli_fetch_assoc($res)){
                        while(returnTimeFloat(returnStarTime($row['macv'])) - $i >= 1){
                            echo "<div id='mo_".$i."' style='grid-row: ".returnGridRows($i)."; border-top: 1px solid; border-bottom: 1px solid; background: white;'></div>";
                            $i++;
                        }
                        echo "<button id='".$row['macv']."' class='task' style='grid-row: ".$row['batdau']. "/" .$row['ketthuc']."; background: ".$row['mau'].";'>".$row['tieude']."</button>";
                        $i = toupper(returnTimeFloat(returnEndTime($row['macv'])));
                    }
                    while($i < 24){
                        echo "<div id='mo_".$i."' style='grid-row: ".returnGridRows($i)."; border-top: 1px solid; border-bottom: 1px solid; background: white;'></div>";
                        $i++;
                    }
                ?>
            </div>
            <div id="tu_content" class="day_content">
            <?php 
                    $sql_tu = "SELECT * FROM thoikhoabieu WHERE tendn = '".$tennd."' and macv LIKE 'tu%' ORDER BY batdau";
                    $res = mysqli_query($conn,$sql_tu);
                    $i = 0;
                    while($row = mysqli_fetch_assoc($res)){
                        while(returnTimeFloat(returnStarTime($row['macv'])) - $i >= 1){
                            echo "<div id='tu_".$i."' style='grid-row: ".returnGridRows($i)."; border-top: 1px solid; border-bottom: 1px solid; background: white;'></div>";
                            $i++;
                        }
                        echo "<button id='".$row['macv']."' class='task' style='grid-row: ".$row['batdau']. "/" .$row['ketthuc']."; background: ".$row['mau'].";'>".$row['tieude']."</button>";
                        $i = toupper(returnTimeFloat(returnEndTime($row['macv'])));
                    }
                    while($i < 24){
                        echo "<div id='tu_".$i."' style='grid-row: ".returnGridRows($i)."; border-top: 1px solid; border-bottom: 1px solid; background: white;'></div>";
                        $i++;
                    }
                ?>
            </div>
            <div id="we_content" class="day_content">
            <?php 
                    $sql_we = "SELECT * FROM thoikhoabieu WHERE tendn = '".$tennd."' and macv LIKE 'we%' ORDER BY batdau";
                    $res = mysqli_query($conn,$sql_we);
                    $i = 0;
                    while($row = mysqli_fetch_assoc($res)){
                        while(returnTimeFloat(returnStarTime($row['macv'])) - $i >= 1){
                            echo "<div id='we_".$i."' style='grid-row: ".returnGridRows($i)."; border-top: 1px solid; border-bottom: 1px solid; background: white;'></div>";
                            $i++;
                        }
                        echo "<button id='".$row['macv']."' class='task' style='grid-row: ".$row['batdau']. "/" .$row['ketthuc']."; background: ".$row['mau'].";'>".$row['tieude']."</button>";
                        $i = toupper(returnTimeFloat(returnEndTime($row['macv'])));
                    }
                    while($i < 24){
                        echo "<div id='we_".$i."' style='grid-row: ".returnGridRows($i)."; border-top: 1px solid; border-bottom: 1px solid; background: white;'></div>";
                        $i++;
                    }
                ?>
            </div>
            <div id="th_content" class="day_content">
                <?php 
                    $sql_th = "SELECT * FROM thoikhoabieu WHERE tendn = '".$tennd."' and macv LIKE 'th%' ORDER BY batdau";
                    $res = mysqli_query($conn,$sql_th);
                    $i = 0;
                    while($row = mysqli_fetch_assoc($res)){
                        while(returnTimeFloat(returnStarTime($row['macv'])) - $i >= 1){
                            echo "<div id='th_".$i."' style='grid-row: ".returnGridRows($i)."; border-top: 1px solid; border-bottom: 1px solid; background: white;'></div>";
                            $i++;
                        }
                        echo "<button id='".$row['macv']."' class='task' style='grid-row: ".$row['batdau']. "/" .$row['ketthuc']."; background: ".$row['mau'].";'>".$row['tieude']."</button>";
                        $i = toupper(returnTimeFloat(returnEndTime($row['macv'])));
                    }
                    while($i < 24){
                        echo "<div id='th_".$i."' style='grid-row: ".returnGridRows($i)."; border-top: 1px solid; border-bottom: 1px solid; background: white;'></div>";
                        $i++;
                    }
                ?>
            </div>
            <div id="fr_content" class="day_content">
            <?php 
                    $sql_fr = "SELECT * FROM thoikhoabieu WHERE tendn = '".$tennd."' and macv LIKE 'fr%' ORDER BY batdau";
                    $res = mysqli_query($conn,$sql_fr);
                    $i = 0;
                    while($row = mysqli_fetch_assoc($res)){
                        while(returnTimeFloat(returnStarTime($row['macv'])) - $i >= 1){
                            echo "<div id='fr_".$i."' style='grid-row: ".returnGridRows($i)."; border-top: 1px solid; border-bottom: 1px solid; background: white;'></div>";
                            $i++;
                        }
                        echo "<button id='".$row['macv']."' class='task' style='grid-row: ".$row['batdau']. "/" .$row['ketthuc']."; background: ".$row['mau'].";'>".$row['tieude']."</button>";
                        $i = toupper(returnTimeFloat(returnEndTime($row['macv'])));
                    }
                    while($i < 24){
                        echo "<div id='fr_".$i."' style='grid-row: ".returnGridRows($i)."; border-top: 1px solid; border-bottom: 1px solid; background: white;'></div>";
                        $i++;
                    }
                ?>
            </div>
            <div id="sa_content" class="day_content">
            <?php 
                    $sql_sa = "SELECT * FROM thoikhoabieu WHERE tendn = '".$tennd."' and macv LIKE 'sa%' ORDER BY batdau";
                    $res = mysqli_query($conn,$sql_sa);
                    $i = 0;
                    while($row = mysqli_fetch_assoc($res)){
                        while(returnTimeFloat(returnStarTime($row['macv'])) - $i >= 1){
                            echo "<div id='sa_".$i."' style='grid-row: ".returnGridRows($i)."; border-top: 1px solid; border-bottom: 1px solid; background: white;'></div>";
                            $i++;
                        }
                        echo "<button id='".$row['macv']."' class='task' style='grid-row: ".$row['batdau']. "/" .$row['ketthuc']."; background: ".$row['mau'].";'>".$row['tieude']."</button>";
                        $i = toupper(returnTimeFloat(returnEndTime($row['macv'])));
                    }
                    while($i < 24){
                        echo "<div id='sa_".$i."' style='grid-row: ".returnGridRows($i)."; border-top: 1px solid; border-bottom: 1px solid; background: white;'></div>";
                        $i++;
                    }
                ?>
            </div>
        </div>
        
    </div>
    <script src="Schedule.js"></script>
</body>
</html>
    