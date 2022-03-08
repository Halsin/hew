<!DOCTYPE html>

<html lang="ja">

  <head>

    <meta charset="utf-8">

    <title>出品ぺージ</title>

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
  </style>

  <body>
      <div class="form-area">
        <h2 align="center">出品情報</h2>
        <form method="POST" action="input2.php">
            商品名　　　：<input type="text" name="name"><br><br>
            写真　　　　：<input type="file" name="image" id="my_image" accept="image/*" multiple><br><br>
            <!-- 数量　　　　：<input type="number" name="num"><br><br> -->
            単価　　　　：<input type="number" name="price"><br><br>
            ひとこと　　：<input type="text" name="msg"><br><br>
            <p align="center">
              <button type="button" class="back" onclick="location.href='./index.php'">戻る</button>
              <input type="submit" value="完了">
            </p>
        </form>
      </div>

  </body>

</html>