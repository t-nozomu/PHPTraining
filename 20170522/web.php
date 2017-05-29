<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>お問い合わせフォーム</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
    </head>
        <body>
            <h1><div Align = "center" > お問い合わせ内容確認</div></h1>
            <hr>

            <!--　入力情報を確認するため、web上に表示----------------------------->

                <form action = "comp.php" method = "post">
                <div class = "dd">
                    <div class = "d">
                        <div class = "d1">姓</div>
                        <div class = "d2">
                            <?php
                                $lname = $_POST['Lastname'];
                                echo $lname;
                             ?>
                        </div>
                    </div>
                    <div class = "d">
                        <div class = "d1">名</div>
                        <div class = "d2">
                            <?php
                                $fname = $_POST['Firstname'];
                                echo $fname;
                             ?>
                        </div>
                    </div>
                    <div class  = "d">
                        <div class = "d1">性別</div>
                        <div class = "d2">
                            <?php
                                    $s = $_POST['s'];
                                    echo $s;
                             ?>
                        </div>
                    </div>
                    <div class  = "d">
                        <div class = "d1">住所</div>
                        <div class = "d2">
                            <?php
                                if(isset($_POST['address'])){
                                    $add = $_POST['address'];
                                    echo $add;

                                }
                             ?>
                        </div>
                    </div>
                    <div class  = "d">
                        <div class = "d1">電話番号</div>
                        <div class = "d2">
                            <?php

                                $phone = $_POST['phone'];
                                echo $phone[0]."-".$phone[1]."-".$phone[2] ;

                             ?>
                        </div>
                    </div>
                    <div class = "d">
                        <div class = "d1">メールアドレス</div>
                        <div class = "d2">
                            <?php

                                $acount = $_POST['acount'];
                                    echo $acount[0]."@".$acount[1];

                             ?>
                        </div>
                    </div>
                    <div class = "d">
                        <div class = "d1">どこで知ったか</div>
                        <div class = "d2">
                            <?php
                                if(isset($_POST['info'])){
                                    $info = $_POST['info'];
                                    foreach($info as $value){
                                        echo "$value ";
                                    }
                                }
                             ?>
                        </div>
                    </div>
                    <div class = "d">
                        <div class = "d1">質問カテゴリ</div>
                        <div class = "d2">
                            <?php

                                if(isset($_POST['category'])){
                                    $cate = $_POST['category'];
                                    echo $_POST['category'];
                                }
                            ?>
                        </div>
                    </div>
                    <div class = "d">
                        <div class = "d1">質問内容</div>
                        <div class = "d2">
                            <?php
                                if(isset($_POST['msg'])){
                                    $msg = $_POST['msg'];
    /*-----------------------------htmlタグの回避------------------------------*/
                                    $msg = str_replace('<','/$&%',$msg);
                                    $msg = str_replace('>','%&$/',$msg);
                                    $msg2 = str_replace('/$&%','&lt;',$msg);
                                    $msg2 = str_replace('%&$/','&gt;',$msg2);

                                    $msg2 = str_replace("\r\n","<br>", $msg2);
                                    $msg = str_replace("\r\n","<br>", $msg);
    /*------------------------------------------------------------------------*/
                                    echo $msg2;
                                }
                             ?>
                        </div>
                    </div>
                    <div class = "d">
                    <!--------------------------------------------------------->

                    <!--次の画面へ遷移するためのボタンの生成----------------------------------------->
                        <div class = "button">
                            <input type ="submit" value = "送信" >
                            <input type ="button" value = "戻る" onclick = "history.back()">
                        </div>
                    </div>
                    <div class = "d" >
                            <a href = "index2.html">未入力状態でお書き直しします。</a>
                    </div>
                    <!---------------------------------------------------------------------------->
                </div>

                <?php
                    $number = str_pad(mt_rand(),10,0,STR_PAD_LEFT);
                 ?>
                <!---web上の内部の値として送信-------------------------------------------------------------------------------------->
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
                <!------------------------------------------------------------------------------------------------------------------->

                </form>
        </body>
 </html>
