<title>SDGs</title>

<style>
    h2 {
        margin-top: 100px;
    }
    .top {
        position: relative;
        left: 550px;
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

//input_confirmから受け取り
$name = $_POST["name"];
$price = $_POST["price"];
$num = $_POST["num"];
$total = $price * $num;


$check = "select * from SDGs";
$result = mysqli_query($db_link,$check);
$count_num = mysqli_num_rows($result);
//SQL文の作成
$strSQL = " insert into SDGs values('','".$name."','".$price."','".$num."','".$total."') ";
//SQL文を実行する
$db_result = mysqli_query($db_link,$strSQL);
if($db_result == false){
  //insertの失敗
?>
  <h2 align="center">追加に失敗しました</h2>
    <input type="button" onclick="location.href='./input.php'" class="top" value="やり直す">
<?php
}else{
  //insertの成功
  $check2 = "select sum(num*total) from sdgs;";
  $result2 = mysqli_query($db_link,$check);
  $result3 = mysqli_query($db_link,$check2);
  $count_num2 = mysqli_num_rows($result2);
?><br>
    <!-- <h2 align="center">追加が完了しました！</h2><br><br> -->
    <h2 align="center">通算 <?php print $count_num2 ?> 種類の食品を購入しました！</h2>
    <h2 align="center">合計〇〇〇〇円分SDGsに貢献しました！</h2>
    <input type="button" onclick="location.href='./input.php'" class="top" value="続けて追加">
    <input type="button" onclick="location.href='./index.php'" class="top" value="トップへ">
<?php
  //SDGsテーブルの行数を表示
  // print "そして".$result3."円分SDGsに貢献しました！";

// $sql = "SELECT * FROM SDGs";
// if($result = $db_link->query($sql)){
//     while($row = $result->fetch_assoc()){
//         print_r($row);
//         echo "<br>";
//     }
//     $result->close();
// }
// $db_link->close();

// $body = "<table border='1'><tr>";
//   $fldmax = mysqli_num_rows($result);
//   for($i = 0;$i < $fldmax; $i++){
//     $body .= "<th>".mysql_field_name($result, $i)."</th>\n";
//   }
//   $body .= "</tr>\n";

//   while($col = mysql_fetch_array($result)){
//     $body .= "<tr>\n";
//     for($i = 0; $i < $fldmax; $i++){
//       $body .= "<td>" . $col[$i] . "</td>\n";
//     }
//     $body .= "</tr>\n";
//   }
// $body .= "</table>\n";
// mysql_free_result($result);
// $con = mysql_close($con);

}
?>