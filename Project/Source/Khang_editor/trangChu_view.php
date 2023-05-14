<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="./trangChu.css">
    <title>Trang Chu</title>
</head>
<body>
    <header></header>
    <div class="main">
        <div class="creNote_but">
            <p class="icon">+</p>
        </div>
        <form action="./trangChu.php" class="creNote_view" method="post">
            <h2 class="nameText">Tên note</h2>
            <input type="text" class = "nameInput" name="tenNote">
            <button type="sumbit" name="create" class="create"> Tạo </button>
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
                    echo "<li class='note_name'>$value</li>";
                }
            ?>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="./trangChu.js"></script>
</body>
</html>