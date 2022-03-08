<?php
if(isset($_POST['user'])) {
    $dsn='mysql:dbname=3hew;charset=utf8';
    $user='nakaya';
    $password='shin0723';
    $dbh = new PDO($dsn,$user,$password);

    $stmt = $dbh->prepare("SELECT * FROM user WHERE name=:user");
    $stmt->bindParam(':user', $_POST['user']);
    $stmt->execute();
    if($rows = $stmt->fetch()) {
        if($rows["pass"] == $_POST['password']) {?>
            <input type="hidden" name="user" value="<?php print $_POST['user'] ?>" />
            <?php
            print "<input type=\"hidden\" name=\"user\" value=>";
            header("Location: ./index.php");
        }else {
            print "名前もしくはパスワードが違います";
        }
    }else {
        print "<p>ログイン失敗</p>";
    }
}
?>