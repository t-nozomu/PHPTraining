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
            /*-----------------------------------入力情報をCSVファイルに書き込み-----------------------------------------*/
                    $number = $_POST['num'];
                    $lname = $_POST['Lastname'];
                    $fname = $_POST['Firstname'];
                    $s = $_POST['s'];
                    $add = $_POST['address'];
                    $phone = $_POST['phone'];
                    $acount = $_POST['acount'];
                    $info = $_POST['info'];
                    $cate = $_POST['category'];
                    $msg = $_POST['msg'];

                    $fp = fopen("manage_list.csv","a+");    //ファイル読み込み
                    $msg = str_replace(",","comma",$msg);
                    fputs($fp,"$number,$lname$fname,$s,$add,$phone,$acount,$info,$cate,$msg\n"); //ファイル書き込み

                    fclose($fp);

                    echo $number; //お問い合わせ番号をweb上に表示
            /*---------------------------------------------------------------------------------------------------------*/
            ?>
            </div>
            <div align = "center">
                    <a href = "index2.html">トップ画面に戻る</a>
            </div>
        </body>




</html>
