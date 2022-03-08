<!DOCTYPE html>

<html lang="ja">

  <head>

    <meta charset="utf-8">

    <title>マイページ</title>

  </head>

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

    span {
      position: relative;
      top: -125px;
    }

    textarea {
      resize: none;
    }

    .edit {
        position: relative;
        top: 50px;
        left: 170px;
    }
  </style>

  <body>
      <div class="form-area">
        <h2 align="center">アイコン変更</h2>
        <form method="POST" action="mypage.php">
            <!-- 名前　　　　：<input type="text" name="name"><br><br> -->
            アイコン　　：<input type="file" name="icon" id="my_image" accept="image/*" multiple>
            <!-- 数量　　　　：<input type="number" name="num"><br><br> -->
            <!-- 単価　　　　：<input type="number" name="price"><br><br> -->
            <!-- <span>ひとこと　　：</span> -->
            <!-- <textarea name="question" cols="30" rows="10" placeholder="例) よろしくお願いします"></textarea><br><br> -->
            　　　　　　　　　　　<input type="submit" class="edit" value="更新">
        </form>
      </div>

  </body>

</html>