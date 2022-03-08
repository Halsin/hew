<!DOCTYPE html>

<html lang="ja">

  <head>

    <meta charset="utf-8">

    <title>情報入力</title>

    <!-- css -->
    <style>
        body{
            position: relative;
            top: 50px;
            text-align: center;
            margin: 0 auto;
        }
        input[type="number"]::-webkit-outer-spin-button, 
        input[type="number"]::-webkit-inner-spin-button { 
            -webkit-appearance: none; 
            margin: 0; 
        }
        .form-area {
            width: 400px;
            height: 300px;
            margin: 50px auto;
            background-color: #008000;
        }
    </style>

  </head>

  <body>
    <div class="form-area">
      <h2>購入額を入力して下さい</h2>
      <form method="POST" action="input_finish.php">
          商品名　：<input type="text" name="name"><br><br>
          単価　　：<input type="number" name="price"><br><br>
          数量　　：<input type="number" name="num"><br><br>
          <input type="button" onclick="location.href='./index.php'" class="top" value="戻る">
          <input type="submit" value="完了">
      </form>
    </div>
  </body>

</html>