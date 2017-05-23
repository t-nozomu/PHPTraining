<?php
    session_start();

 ?>

<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>確認画面</title>
    </head>
        <body>
            <div Align = "center" > 確認画面　</div>
                <form action = "comp.php" method = "post">
                    <table border = "0" align = "center" >　
                    <tr>
                        <td>姓</td>
                        <td>
                            <?php
                                $lname = $_POST['Lastname'];
                                echo $lname;
                             ?>
                        </td>
                    </tr>
                    <tr>
                        <td>名</td>
                        <td>
                            <?php
                                $fname = $_POST['Firstname'];
                                echo $fname;
                             ?>
                        </td>
                    </tr>
                    <tr>
                        <td>性別</td>
                        <td>
                            <?php
                                    $s = $_POST['s'];
                                    echo $s;
                             ?>
                        </td>
                    </tr>
                    <tr>
                        <td>住所</td>
                        <td>
                            <?php
                                if(isset($_POST['address'])){
                                    $add = $_POST['address'];
                                    echo $add;

                                }
                             ?>
                        </td>
                    </tr>
                    <tr>
                        <td>電話番号</td>
                        <td>
                            <?php

                                $phone = $_POST['phone'];
                                echo $phone[0]."-".$phone[1]."-".$phone[2] ;

                             ?>
                        </td>
                    </tr>
                    <tr>
                        <td>メールアドレス</td>
                        <td>
                            <?php

                                $acount = $_POST['acount'];
                                foreach($acount as $value){
                                    echo "$value";
                                }

                             ?>
                        </td>
                    </tr>
                    <tr>
                        <td>どこで知ったか</td>
                        <td>
                            <?php
                                if(isset($_POST['info'])){
                                    $info = $_POST['info'];
                                    foreach($info as $value){
                                        echo "$value ";
                                    }
                                }
                             ?>
                        </td>
                    </tr>
                    <tr>
                        <td>質問カテゴリ</td>
                        <td>
                            <?php

                                if(isset($_POST['category'])){
                                    echo $_POST['category'];
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>質問内容</td>
                        <td colsspan = "2">
                            <?php
                                if(isset($_POST['msg'])){
                                    echo $_POST['msg'];
                                }
                             ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan = "2">
                            <input type ="submit" value = "送信" >
                            <input type ="button" value = "戻る" onclick = "history.back()">
                        </td>
                    </tr>
                    </table>
                    <input type = "hidden" name= "fname" value = "<?php  echo $lname;?>">
                    <input type = "hidden" name= "fname" value = "<?php  echo $fname;?>">
                    <input type = "hidden" name= "fname" value = "<?php  echo $s;?>">
                    <input type = "hidden" name= "fname" value = "<?php echo $phone[0]."-".$phone[1]."-".$phone[2] ?>">
                </form>
        </body>
 </html>
