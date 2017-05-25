<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>お問い合わせフォーム</title>
        <link rel = "stylesheet" type = "text/css" href = "manage.css">
    </head>
    <body>
        <h1>管理表</h1>
        <div class = "g">
            <div class = "num">お問い合わせ番号</div>
            <div class = "name">氏名</div>
            <div class = "s">性別</div>
            <div class = "add">住所</div>
            <div class = "phone">電話番号</div>
            <div class = "acount">メールアドレス</div>
            <div class = "info">どこで知ったか</div>
            <div class = "cate">質問カテゴリ</div>
            <div class = "msg">質問内容</div>
        </div>

        <?php

            $fp = fopen("manage_list.csv","r");
        while (($line = fgetcsv($fp)) !== false){
            echo '<div class = "g" >';
            for($i = 0; $i < count($line); $i++ ){
                switch($i){
                   case 0:
                        echo '<div class = "num">';
                        break;

                    case 1:
                        echo '<div class = "name">';
                        break;

                    case 2:
                        echo '<div class = "s">';
                        break;

                    case 3:
                        echo '<div class = "add">';
                        break;

                    case 4:
                        echo '<div class = "phone">';
                        break;

                    case 5:
                        echo '<div class = "acount">';
                        break;

                    case 6:
                        echo '<div class = "info">';
                        break;

                    case 7:
                        echo '<div class = "cate">';
                        break;

                    case 8:
                        echo '<div class = "msg">';
                        break;

                    default:
                        echo '<div class = "r">';
                        break;

                }
                echo $line[$i];
                echo "</div>";
            }
            echo "</div>";

        }

        ?>

    </body>
</html>
