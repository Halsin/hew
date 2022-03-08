<?php
if(isset($_POST['user'])) {
    $dsn='mysql:dbname=3hew;charset=utf8';
    $user='nakaya';
    $password='shin0723';
    $dbh = new PDO($dsn,$user,$password);
    $stmt = $dbh->prepare("INSERT INTO user VALUES(:name,:password)");
    $stmt->bindParam(':user', $_POST['user']);
    $stmt->bindParam(':password', $_POST['password']);
    $stmt->execute();
}
?>



<!-- css -->
<style>
    body{
        position: relative;
        top: 50px;
        margin: 0 auto;
        text-align: center;
    }
    .form-area {
        width: 400px;
        height: 300px;
        margin: 50px auto;
        background-color: #008000;
    }
</style>

<body>
    <title>新規登録</title>
    <div class="form-area">
        <form action="shinki_out.php" method="post">
            <h2>新規会員登録</h2>
            <p>名前　　　：<input type="text" placeholder="名前を入力" name="name"></p>
            <p>パスワード：<input type="password" placeholder="パスワードを入力" name="password"></p>
            <p><input type="submit" value="登録"></p>
        </from>
    </div>
</body>