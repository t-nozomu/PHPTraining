<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>お問い合わせフォーム</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
    </head>
    <body>
        <h1>管理表</h1>
        <hr>
        <table>
        <!--   各出力項目の生成　----------->
        <tr class = "item">
            <td>No.</td>
            <td>氏名</td>
            <td>性別</td>
            <td>住所</td>
            <td>電話番号</td>
            <td>メールアドレス</td>
            <td>どこで知ったか</td>
            <td>質問カテゴリ</td>
            <td class = "ques">質問内容</td>
        </tr>
        <!---------------------------------->


        <?php
        /*------------ファイルの中身を読み込み、web上に表示---------------*/
            $fp = fopen("manage_list.csv","r");
            $count = 1;
                while(!feof($fp)){
                    $line = fgetcsv($fp);
                        if($count%2 == 0){
                            echo '<tr class = "g">';
                        }
                        else{
                            echo '<tr>';
                        }
                        $count++;
                    if($line[0] != ""){
                        for($i = 0; $i < count($line); $i++ ){

                            echo "<td>";
        /*-------------------------htmlタグの回避------------------------------*/
                            if($i == 8){
                                $line[$i] = str_replace("comma",",",$line[$i]);
                                $line[$i] = str_replace('/$&%','&lt;',$line[$i]);
                                $line[$i] = str_replace('%&$/','&gt;',$line[$i]);
                            }
        /*--------------------------------------------------------------------*/
                            echo $line[$i];
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                }
                fclose($fp);
        /*---------------------------------------------------------------------*/
        ?>

    </body>
</html>
