<?php
include_once "connect.php"; //連線資料庫
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問卷系統</title>
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>
  <nav>
    <?php
    if (isset($_SESSION['user'])) {
    ?>
      <a href="logout.php">登出</a><!-- 如果有登入資料就顯示登出 -->
    <?php
    } else {
    ?>
      <a href="login.php">登入</a><!-- 如果沒有登入資料就顯示登入 -->
    <?php
    }
    ?>
  </nav>

  <div class="container">
    <h1>投票列表</h1>

    <!-- 撈出資料庫會員資料 -->
    <?php

    $sql = "select * from `users` "; //撈出users這個資料表的全部內容

    $users = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {
      echo $user['acc'] . "<br>";
    }
    ?>
  </div>

  <footer>
    Hollie版權所有
  </footer>
</body>

</html>