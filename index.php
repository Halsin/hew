<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title>CONTRIBUTOR</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    </head>

    <style>
        .navigation li{
        float: left;
        width: 25%;
        list-style: none;
        font-weight: bold;
        }

        section {
            margin-top: 50px;
        }

        i {
            width: 70px;
            height: 70px;
            border-radius: 10px;
            color: #008000;
            font-size: 50px;
            text-align: center;
            position: relative;
            top: 300px;
            left: 850px;
            background-color: #fff;
        }

        .list i:hover {
            background-color: rgba(0,0,0,0.6);
        }
        .navigation{
        position: absolute;
        top: 400px;
        z-index: 3;
        width: 960px;
        height: 50px;
        background-color: #008000;
        }
/*スライドショーの設定*/
.slide {
  position: relative;/*スライドする画像の入ったBOXを画像配置の基準位置にする*/
  z-index: 1;
  width: 100%;
  height: 630px;
  overflow: hidden;
}


.slide img {
  position: absolute;/*.slideを基準に位置指定してすべての画像を同じ場所に重ねる*/
  top: 50%;/*.slideの中心位置から配置する*/
  left: 50%;/*.slideの中心位置から配置する*/
  transform: translate(-50%, -50%);/*.slideの中心位置から.slideの左上基準に移動する*/
  width: 100%;
  height: auto;
  opacity: 0;/*すべての画像の最初の不透明度を0％にして透明にする*/
  animation :slideshow 16s linear infinite;/*「slideshow」と言う名前のアニメーションを設定する　24秒でアニメーションを繰り返す*/
}

/*「slideshow」アニメーションの進行割合に対するスタイルの変化の指定　24秒の中で不透明度を変化させている*/
@keyframes slideshow{
  0%{
    opacity: 0;
  }
  10%{
    opacity: 1;
  }
  28%{
    opacity: 1
  }
  38%{
    opacity: 0;
  }
  100%{
    opacity: 0;
  }

}

/*.slideの中の二つ目の画像のアニメーションの開始を8秒遅らせて開始*/
.slide img:nth-child(2){
  animation-delay: 8s;
}

/*.slideの中の二つ目の画像のアニメーションの開始を16秒遅らせて開始*/
.slide img:last-child(){
  animation-delay: 16s;
}

img.list {
    width: 300px;
    height: 200px;
}
    </style>

    <body>
        <div class="wrap">
            <header id="header-area">
                <div class="logo"><img src="images/logo.png" alt="CONTRIBUTOR"></div>
                <div class="slide">
                    <img src="images/image001.png" alt="野菜">
                    <img src="images/image002.png" alt="ジュース">
                    <!-- <img src="images/image003.png" alt="肉"> -->
                    <a href="list.php" class="list"><div><i class="fas fa-camera"><p>出品</p></i></div></a>
                </div>

                <!-- ナビゲージョン -->
                <nav class="navigation">
                    <ul>
                        <li><a href="input.php">SDGs</a></li>
                        <li><a href="#menu-area">出品一覧</a></li>
                        <li>
                            <form action="mypage.php" method="POST" name="mypage" >
                                <input type="hidden" name="user" value="<?php print $_POST['user'] ?>" />
                                <!-- <a class="Nav" id="logoutID" href="javascript:logout.submit()" type="submit" onclick="return checkOut()">ログアウト</a> -->
                                <a href="mypage.php" type="submit">マイページ</a>
                            </form>
                        </li>
                        <li><a href="question.php">お問い合わせ</a></li>
                    </ul>
                </nav>
            </header>

            <main>
                <!-- ニュース -->
                <section id="news-area" class="news">
                    <div class="inner">
                        <h2>ニュース</h2>
                        <div class="update">
                            <dl>
                                <dt>2020年6月23日</dt>
                                <dd>　　　　　本サービスのメンテナンスを行いました。</dd>
                                <dt>2020年6月16日</dt>
                                <dd>　　　　　あの松阪牛の高級焼肉を先着10名様にプレゼント！</dd>
                                <dt>2020年5月30日</dt>
                                <dd>　　　　　出品10品を突破された方にクーポンを配布！</dd>
                            </dl>
                        </div>
                    </div>
                </section>

                <!-- メニュー -->
                <section id="menu-area" class="menu">
                    <div class="inner">
                        <h2>出品一覧</h2>
                        <ul>
                            <li>
                                <a href="images/image2.png" rel="lightbox" title="商品名">
                                    <img src="images/image2.png" class="list" alt="商品名">
                                    <h3>大根</h3>
                                    <p>100円</p>
                                    <p>よろしくお願いします</p>
                                </a>
                            </li>
                            <li>
                                <a href="images/image3.png" rel="lightbox" title="商品名">
                                    <img src="images/image3.png" class="list" alt="商品名">
                                    <h3>温州みかん</h3>
                                    <p>120円</p>
                                    <p>よろしくお願いします</p>
                                </a>
                            </li>
                            <li>
                                <a href="images/image4.png" rel="lightbox" title="商品名">
                                    <img src="images/image4.png" class="list" alt="商品名">
                                    <h3>茶葉</h3>
                                    <p>500円</p>
                                    <p>よろしくお願いします</p>
                                </a>
                            </li>
                            <li>
                                <a href="images/image5.png" rel="lightbox" title="商品名">
                                    <img src="images/image5.png" class="list" alt="商品名">
                                    <h3>トマト</h3>
                                    <p>250円</p>
                                    <p>よろしくお願いします</p>
                                </a>
                            </li>
                            <li>
                                <a href="images/image6.png" rel="lightbox" title="商品名">
                                    <img src="images/image6.png" class="list" alt="商品名">
                                    <h3>アボカド</h3>
                                    <p>150円</p>
                                    <p>よろしくお願いします</p>
                                </a>
                            </li>
                            <li>
                                <a href="images/image7.png" rel="lightbox" title="商品名">
                                    <img src="images/image7.png" class="list" alt="商品名">
                                    <h3>牛肉</h3>
                                    <p>600円</p>
                                    <p>よろしくお願いします</p>
                                </a>
                            </li>
                            <li>
                                <a href="images/image8.png" rel="lightbox" title="商品名">
                                    <img src="images/image8.png" class="list" alt="商品名">
                                    <h3>バナナ</h3>
                                    <p>160円</p>
                                    <p>よろしくお願いします</p>
                                </a>
                            </li>
                            <li>
                                <a href="images/image9.png" rel="lightbox" title="商品名">
                                    <img src="images/image9.png" class="list" alt="商品名">
                                    <h3>コーヒー豆</h3>
                                    <p>250円</p>
                                    <p>よろしくお願いします</p>
                                </a>
                            </li>
                            <li>
                                <a href="images/image10.png" rel="lightbox" title="商品名">
                                    <img src="images/image10.png" class="list" alt="商品名">
                                    <h3>オレンジジュース</h3>
                                    <p>300円</p>
                                    <p>よろしくお願いします</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
            </main>
        </div>

        <!-- copyエリア -->
        <p class="copy">(C) CONTRIBUTOR</p>
    <script src="js/jquery.min.js"></script>
    <!-- <script src="js/slimbox.js"></script> -->
    <script src="js/script.js"></script>
    </body>
</html>
