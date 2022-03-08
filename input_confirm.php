<!DOCTYPE html>

<html lang="ja">

  <head>

    <meta charset="utf-8">

    <!-- css -->
    <style>
      body{
          position: relative;
          top: 100px;
          text-align: center;
          margin: 0 auto;
      }

      input[type="number"]::-webkit-outer-spin-button, 
      input[type="number"]::-webkit-inner-spin-button { 
      -webkit-appearance: none; 
      margin: 0; 
      }
    </style>

  </head>

  <body>

    <form method="POST" action="input_finish.php">
      <?php
      if($_POST["name"] == ""){
        print "データを入力して下さい";?>
        <input type="button" onclick="location.href='./input.php'" value="修正する">
        <?php
      }elseif($_POST["price"] == ""){
        print "データを入力して下さい";?>
        <input type="button" onclick="location.href='./input.php'" value="修正する">
        <?php
      }else{
        $name = $_POST['name'];
        $price = $_POST['price'];
        $num = $_POST['num'];
        print "商品名：".$name?><br>
        <?php print "単価：".$price?><br>
        <?php print "数量：".$num?><br>
        <h2><?php print "間違いないですか？" ?></h2>
        <input type="button" onclick="location.href='./input.php'" value="修正する">
        <input type="submit" value="決定">
      <?php
      }
      ?>
      <br>
      <!-- <input type="button" onclick="location.href='./index.php'" value="トップへ"> -->
    </form>
    
  </body>

</html>