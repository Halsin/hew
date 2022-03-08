<!DOCTYPE html>

<html lang="ja">

  <head>

    <meta charset="utf-8">

    <title>ログイン＆新規登録</title>

    <!-- css -->
    <style>
      h1{
        text-align: center;
      }
      div{
        width: 150px;
        height: 150px;
        position: relative;
        top: 100px;
        left: 430px;
        text-align: center;
        background-color: #999;
        display: inline-block;
        border-radius: 100px;
        font-size: 30px;
      }
      div:hover{
        background-color: #789;
      }
      .output{
        margin-left: 100px;
      }
      a{
        color: #000;
        position: relative;
        top: 50px;
        text-decoration: none;
      }
    </style>

  </head>

  <body>

    <h1>選択してください</h1>
    
    <div><a href="login.php">ログイン</a></div>
    <div class="output"><a href="shinki.php">新規登録</a></div>

  </body>

</html>