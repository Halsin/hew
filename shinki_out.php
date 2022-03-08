<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta http-equiv="content-style-type" content="text/css" />
   <!-- PAGE TITLE -->
  <title>顧客登録</title>
</head>
<body>

<!-- css -->
<style>
    body{
        position: relative;
        top: 100px;
        margin: 0 auto;
        text-align: center;
    }
</style>

<?php
// HTTPヘッダーで文字コードを指定
header("Content-Type:text/html; charset=UTF-8");
?>
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
$strName = $_POST['name'];
$strPass = $_POST['password'];


$check = "select * from user where name = '$strName'";
$result = mysqli_query($db_link,$check);
$count_num = mysqli_num_rows($result);
if($count_num != 0){
	$msg = "入力したＩＤは既に存在します";?>

<?php
}else{
//SQL文の作成
$strSQL = " insert into user values('','".$strName."','".$strPass."')";
//SQL文を実行する
$db_result = mysqli_query($db_link,$strSQL);
if($db_result == false){
  //insertの失敗
  $msg = "顧客登録が失敗しました".$strSQL;?>
  
<?php
}else{
  //insertの成功
  $msg = "顧客登録が完了しました";?>
  
<?php
}
}
mysqli_close($db_link);
?>

<?php
print $msg;
?>
<?php
switch($msg){
    case "入力したＩＤは既に存在します":?>
        <a href="shinki.php">戻る</a>
<?php   break;
    case "顧客登録が失敗しました":?>
        <a href="shinki.php">戻る</a>
<?php   break;
    case "顧客登録が完了しました":?>
        <br><a href="login.php">ログインに戻る</a>
<?php
}
?>
</body>
</html>
