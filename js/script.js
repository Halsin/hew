// JavaScript Document

//.navigationがウィンドウの上まで行ったら固定されるスクリプト


$(function() {
	//.変数navに.navigationを代入
    var nav = $('.navigation');
	//.navigationの位置を変数navTopに代入。「offset()」メソッドは対象要素の座標位置の取得や設定が出来る
    var navTop = nav.offset().top;
	//スクロールするたびに実行する命令
    $(window).scroll(function () {
		//変数winTopにスクロール位置を代入。「scrollTop()」メソッドは画面のスクロール位置の取得や設定が出来る
       var winTop = $(this).scrollTop();
        //スクロール位置が.navigationの位置より下だったらクラスfixedを追加 if文は条件分岐が出来る。()の中に条件式を書く
        if (winTop >= navTop) {
            nav.addClass('fixed')
          //スクロール位置が.navigationの位置より上だったらクラスfixedを無くす
      } else if (winTop <= navTop) {
            nav.removeClass('fixed')
        }
    });
});


//ページ内スクロールをスムーズにするスクリプト 詳しくは https://qiita.com/natuuu0831/items/172012b5b59f28350afc

$(function(){
	//属性値が前方一致する要素を取り出す ここではhref属性が#のものをクリックしたら以下の命令を実行する
  $('a[href^="#"]').click(function(){
    var speed = 500;//変数speedに500ミリ秒を代入
    var href= $(this).attr("href");//変数hrefにクリックされた要素のhref属性の値を代入
    var target = $(href == "#" || href == "" ? 'html' : href);//変数targetにhrefが#の時と空の時は(′html′)が、それ以外は(′html′)が、それ以外は(href)がtargetに代入される。
    var position = target.offset().top;//offset().top;はドキュメントの左上の起点から、要素の左上までの距離（数値）を取得し、positionに代入。あくまでpositionにはいるのは数値。
    $("html, body").animate({scrollTop:position}, speed, "swing");//.animate({変化させるCSSのキーと値のマップ値} ,[ スピード] ,[ イージングの種類] ),[アニメーションが完了した時に実行したい処理] ) アニメーション関数によってスクロールをアニメーションにしている
    return false;//処理を中断。リンク先に飛ばされる可能性を防ぐため。
  });
});