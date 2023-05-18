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
                <p class="monthAndYear">September 2022</p>
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
            <p>Đây là nơi chứa thời khóa biểu</p>
        </div>
    </div>
    <script src="../quynh_editor/dynamicCalendar.js"></script>
    <script src="./trangChu.js"></script>
</body>
</html>