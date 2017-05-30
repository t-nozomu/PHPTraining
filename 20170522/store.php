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

        $fp1 = fopen("manage_list.csv","a+");    //ファイル読み込み
        $fp2 = fopen("number.txt","w");
        $msg = str_replace(",","comma",$msg);
        fputs($fp1,"$number,$lname$fname,$s,$add,$phone,$acount,$info,$cate,$msg\n"); //ファイル書き込み
        rewind($fp2);
        fputs($fp2,$number); //お問い合わせ番号のファイル書き込み

        fclose($fp);

        header("Location:comp.php");

/*---------------------------------------------------------------------------------------------------------*/
?>
