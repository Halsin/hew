<body>

<style>
    h2 {
        margin-top: 100px;
    }
    .top {
        position: relative;
        left: 600px;
    }
</style>

<?php
include("db_ini.php");
$db_link = mysqli_connect($host,$user,$pass);
if($db_link == false){
  print "接続に失敗しました";
  exit;
}

$db_flg = mysqli_select_db($db_link,$db_name);
if($db_flg == false){
  print "選択に失敗しました";
  exit;
}

//charset指定
mysqli_set_charset($db_link,"utf8");

//ログイン画面から受け取り
$strQuestion = $_POST['question'];


$check = "select * from question";
$result = mysqli_query($db_link,$check);
$count_num = mysqli_num_rows($result);
//SQL文の作成
$strSQL = " insert into question values('','".$strQuestion."') ";
//SQL文を実行する
$db_result = mysqli_query($db_link,$strSQL);
if($db_result == false){
  //insertの失敗
?>
  <h2 align="center">送信に失敗しました</h2>
<?php
}else{
  //insertの成功
?>
    <h2 align="center">送信が完了しました</h2><br><br>
    <input type="button" onclick="location.href='./index.php'" class="top" value="トップへ">
<?php
}
mysqli_close($db_link);
?>

</body>
