<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>お問い合わせフォーム</title>
        <link rel = "stylesheet" type = "text/css" href = "manage.css">
    </head>
    <body>
        <h1>管理表</h1>
        <div class = "g">
            <div class = "r">お問い合わせ番号</div>
            <div class = "r">氏名</div>
            <div class = "r">性別</div>
            <div class = "r">住所</div>
            <div class = "r">電話番号</div>
            <div class = "r">メールアドレス</div>
            <div class = "r">どこで知ったか</div>
            <div class = "r">質問カテゴリ</div>
            <div class = "r">質問内容</div>
        </div>

        <?php
            $fp = fopen("manage_list.csv","r");
        while (($line = fgetcsv($fp)) !== false){
            echo '<div class = "g" >';
            foreach($line as $line){
                echo '<div class = "r">';
                echo $line;
                echo "</div>";
            }
            echo "</div>";
        }
        ?>

    </body>
</html>
