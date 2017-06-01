<!DOCTYPE html>
 <html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>お問い合わせフォーム</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
    </haed>
        <body>
            <h1> お問い合わせ完了 </h1>
            <hr>
            <div class = "comp">
                <p>入力情報を確定しました。</p>
                お問い合わせ番号:
                <?php
                    $fp = fopen("number.txt","r");
                    $number = fgets($fp);
                    echo $number;
                 ?>
            </div>
            <div align = "center">
                    <a href = "index2.html">トップ画面に戻る</a>
            </div>            
        </body>




</html>
