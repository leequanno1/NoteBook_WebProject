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
    <?php
        include 'trangChu.php';
    ?>
    <header></header>
    <div class="main">
        <div class="creNote_but">
            <p class="icon">+</p>
        </div>
        <form action="./trangChu.php" class="creNote_view" method="post">
            <h2 class="nameText">Tên note</h2>
            <input type="text" class = "nameInput" name="nameInput">
            <button type="sumbit" name="create" class="create"> Tạo </button>
            <div class="creNote_exit">Exit</div>
        </form> 
    </div>
    <script src="./trangChu.js"></script>
</body>
</html>