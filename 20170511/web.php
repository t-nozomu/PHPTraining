

<!DOCTYPE html>
<html lang = “ja”>
    <head>
        <meta charset = “UFT-8”>
        <title>フォームからデータを受け取る</title>
    </head>
    <body>
        <h1>フォームデータの送信</h1>
        <form action = "web.php" method = "post">
            <input type = "text" name = "comment"><br/>
            <input type= "submit"  value= "転送すれば死なない" >
        </form>
    </body>
</html>

<?php
    if(isset($_POST['comment'])){
    $comment = $_POST['comment'];
    echo $comment ;
    }
?>
