<?php
    $number = str_pad(mt_rand(),10,0,STR_PAD_LEFT);
 ?>
<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>お問い合わせフォーム</title>
    </head>
        <body>
            <h1><div Align = "center" > お問い合わせ内容確認　</div></h1>
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
                                    echo $acount[0]."@".$acount[1];

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
                                    $cate = $_POST['category'];
                                    echo $_POST['category'];
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>質問内容</td>
                        <td >
                            <?php
                                if(isset($_POST['msg'])){
                                    $msg = $_POST['msg'];
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
                    <tr>
                        <td = colspan = "2">
                            <a href = "index.html">未入力状態でお書き直しします。</a>
                        </td>
                    </tr>
                    </table>


                    <input type = "hidden" name = "num" value = "<?php echo $number ;?>">
                    <input type = "hidden" name= "Lastname" value = "<?php  echo $lname;?>">
                    <input type = "hidden" name= "Firstname" value = "<?php  echo $fname;?>">
                    <input type = "hidden" name= "s" value = "<?php  echo $s;?>">
                    <input type = "hidden" name= "address" value = "<?php  echo $add;?>">
                    <input type = "hidden" name= "phone" value = "<?php echo $phone[0]."-".$phone[1]."-".$phone[2]; ?>">
                    <input type = "hidden" name= "acount" value = "<?php  echo $acount[0]."@".$acount[1];?>">
                    <input type = "hidden" name= "info" value = "<?php  foreach($info as $value) echo "$value ";?>">
                    <input type = "hidden" name= "category" value = "<?php  echo $cate;?>">
                    <input type = "hidden" name= "msg" value = "<?php  echo $msg;?>">


                </form>
        </body>
 </html>
