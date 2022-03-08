<!DOCTYPE html>

<html lang="ja">

  <head>

    <meta charset="utf-8">

    <title>お問い合わせぺージ</title>

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

    textarea {
      resize: none;
    }
    .submit1 {
      position: relative;
    }
  </style>

  <body>

    <div class="form-area">
      <form action="finish.php" method="post" align="center">
        <h2>お問い合わせ内容</h2>
        <textarea name="question" cols="30" rows="10" placeholder="内容を記入してください"></textarea><br>
        <button type="button" class="back" onclick="location.href='./index.php'">戻る</button>
        <input class="submit1" type="submit" value="送信">
      </form>
    </div>

  </body>

</html>