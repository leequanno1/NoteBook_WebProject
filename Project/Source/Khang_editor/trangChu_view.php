<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="../themify-icons/themify-icons.css">
    <link rel = "stylesheet" href="../quynh_editor/dynamicCalendar.css">
    <link rel = "stylesheet" href="./trangChu.css">
    <title>Trang Chu</title>
</head>
<body>
    <header>
        <div class="btnHeader">NOTE</div>
        <div class="btnHeader">LỊCH</div>
        <div class="btnHeader">TKB</div>
        <div class="btnHeader out">ĐĂNG XUẤT</div>
    </header>
    <div class="main">
        <div id="note_content">
            <div class="creNote_but">
                <p class="icon">+</p>
            </div>
            <form action="./trangChu.php" class="creNote_view" method="post">
                <h2 class="nameText">Tên note</h2>
                <input type="text" class = "nameInput" name="tenNote">
                <button type="sumbit" name="create" class="create">Tạo</button>
                <div class="creNote_exit">Exit</div>
            </form>
            <div class="noteList">
                <?php
                    include '../connetdata.php';
                    session_start();
                    $tendn = $_SESSION['tendn'];
                    $sql = "SELECT tenNote FROM notes WHERE tendn = '$tendn'";
                    $res = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($res)){
                        $value = $row['tenNote'];
                        echo "<a href= './trangChu.php?tennote=".$value."' class='note_name'>$value</a>
                        <i class='delete ti-trash' accesskey='".$value."'></i><br>";
                    }
                ?>
            </div>
            <div class="areyousure">
                <p>Bạn có chắc chắn muốn xóa</p>
                <div class="yes">Có</div>
                <div class="no">Không</div>
            </div>
        </div>
        <div id="lich_content">
            <div class="container">
            <div class="header">
                <input type="text" class="monthAndYear" value="hello" style="background-color: #edf1f4;width: 450px;"> 
                <div class="icons">
                    <button class="prevIcon">&lt;</button>
                    <button class="nextIcon">&gt;</button>
                </div>
            </div>
            <div class="calendar">
                    <ul class="weekDays">
                        <li>SUN</li>
                        <li>MON</li>
                        <li>TUE</li>
                        <li>WED</li>
                        <li>THU</li>
                        <li>FRI</li>
                        <li>SAT</li>
                    </ul>
                    <ul class="dateOfMonth">
                        <li class="inactive">1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                        <li>10</li>
                        <li>11</li>
                        <li>12</li>
                        <li>13</li>
                        <li class="today">14</li>
                        <li>15</li>
                        <li>16</li>
                        <li>17</li>
                        <li>18</li>
                        <li>19</li>
                        <li>20</li>
                        <li>21</li>
                        <li>22</li>
                        <li>23</li>
                        <li>24</li>
                        <li>25</li>
                        <li>26</li>
                        <li>27</li>
                        <li>28</li>
                        <li>29</li>
                        <li>30</li>
                        <li>31</li>
                    </ul>
            </div>
    </div>
        </div>
        <div id="tkb_content">
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
        </div>
    </div>
    <script src="../quynh_editor/dynamicCalendar.js"></script>
    <script src="./trangChu.js"></script>
</body>
</html>
