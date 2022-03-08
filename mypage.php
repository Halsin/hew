<!DOCTYPE html>

<html lang="ja">

  <head>

    <meta charset="utf-8">

    <title>マイページ</title>

  </head>

  <!-- styleエリア -->
  <style>

    body {
      color: #fff;
    }

    .form-area {
      width: 400px;
      height: 400px;
      margin: 50px auto;
      background-color: #008000;
    }

      input[type="number"]::-webkit-outer-spin-button, 
      input[type="number"]::-webkit-inner-spin-button { 
      -webkit-appearance: none; 
      margin: 0; 
      } 

      .edit {
          float: right;
          position: relative;
          right: 10px;
      }

      .back {
        position: relative;
        left: 180px;
      }
      .icon {
        width: 100px;
        height: 90px;
      }
      span {
        position: relative;
        top: -80px;
      }
  </style>

<!-- PHPエリア -->
<?php?>

  <body>
      <div class="form-area">
        <h2 align="center">マイページ</h2>
            名前　　　　：HAL太郎
            <br><br>
            <span>アイコン　　：</span><img src="images/hands.png" class="icon" alt="地球温暖化">
            <input type="button" onclick="location.href='./profile_icon.php'" class="edit" value="変更"><br><br>
            <!-- 数量　　　　：<input type="number" name="num"><br><br> -->
            <!-- 単価　　　　：<input type="number" name="price"><br><br> -->
            ひとこと　　：よろしくお願いします
            <input type="button" onclick="location.href='./profile_msg.php'" class="edit" value="変更"><br><br>
            <button type="button" class="back" onclick="location.href='./index.php'">戻る</button>
      </div>

  </body>

</html>