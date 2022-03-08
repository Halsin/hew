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
    <title>ログイン</title>
    <div class="form-area">
        <form action="confirm.php" method="post">
            <h2>ログイン</h2>
            <p>名前　　　：<input type="text" placeholder="名前を入力" name="user" required></p>
            <p>パスワード：<input type="password" placeholder="パスワードを入力" name="password" required></p>
            <p><input type="submit" value="ログイン"></p>
        </form>
    </div>
</body>