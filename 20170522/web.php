<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>
                確認画面
        </title>



<?php
    $h = ["Lastname","Firstname","s","address","phone1","phone2","phone3","acount","domain","book1","book2","category","msg"];
    echo "<table border=1>";
    for($i = 0; $i < count($h); $i++){
        set($h[$i]);
    }
    echo "</table>";


 function sep(){
     if(strpos($a,'phone') !== false){

     }
     elseif(strpos($a,'book') !== false){

     }
     else{

     }
 }


 function set($a){
     if(isset($_POST[$a]) && $_POST[$a] != " "){
         $b = $_POST[$a];
         echo "<tr><td>";
         echo "ああああああ";
         echo "</td><td>";
         echo "$b</td></tr>";
     }
     else{
         echo "未入力<br>";
     }
 }

 ?>

 </html>
