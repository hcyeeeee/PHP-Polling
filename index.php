<?php include_once "./api/db.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問卷系統</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <style>

.navbar{
background: darkgoldenrod;
}
.p-3{
background: darkgoldenrod;
}
.btn-info{
  background:#855600;
  background:#d2b38c;
  border:none;
}

.btn-outline-light:hover{
  background: wheat;
  border:white;
  color:#855600;
}


.display-4{
  border:20px black;
  color:wheat;
}
  </style>
</head>

<body>


<!-- 標題 -->
<nav class="navbar navbar-light  ">
  <div class="container-fluid">
    <p class="display-4 ">投票系統</p>
    <!-- error -->
     <?php
     if(isset($_SESSION['error'])){
     echo "<span class='text-danger'style='font-size:24px'>".$_SESSION['error']."</span>";
     }

     //判斷是否有登入的紀錄，根據登入狀況，顯示不同的功能按鈕
     if(isset($_SESSION['user'])){
     echo "<span class=' mr-5 text-light ' style='font-size:26px'>welcome！{$_SESSION['user']}</span>";
     ?>
       <div>
       <a class="btn btn-info mx-1" href="logout.php">登出</a>
      </div>

     <?php
     }else{
     ?>
      <!-- 登入＆註冊 -->
     <form class="form-inline">
     <a href="?do=login" class="btn btn-outline-light btn-lg">登入</a>
      &nbsp &nbsp
        <a href="?do=reg"><button class="btn btn-outline-light btn-lg" type="button">註冊</button></a>
</form>

     <?php
     }
     ?>

  </div>
</nav>


 <!-- 中間的頁面 -->
  <div class="container mt-4 auto">

    <?php
   // 如果有就用$do如果沒有就用file
   $do = (isset($_GET['do'])) ? $_GET['do'] : 'list';
   // 加入檔案(不要打.ＰＨＰ)
   $file = "./front/" . $do . ".php";
   // check檔案是否存在
   if (file_exists($file)) {
    include $file;
   } else {
    include "./front/list.php";
   }
   ?>
   </div>
   <br><br>

   <!-- footer -->
   <div class="p-3 text-center text-light fixed-bottom  ">Copyright © 2021 by HCY</div>

 
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  </body>
</html>