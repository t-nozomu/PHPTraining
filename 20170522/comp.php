<!DOCTYPE html>
 <html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>お問い合わせフォーム</title>
    </haed>
        <body>
            <div Align = "center">
                <h1> お問い合わせ完了 </h1>
                お問い合わせ番号:

            <?php
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

                    $fp = fopen("manage_list.csv","a+");
                    fputs($fp,"$number,$lname$fname,$s,$add,$phone,$acount,$info,$cate,$msg\n");

                    fclose($fp);

                    echo $number;

                 ?>

            </div>
        </body>




</html>
