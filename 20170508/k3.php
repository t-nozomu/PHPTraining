<?php
function local(){
    global $str1;

    echo $str1;
}
$str1 = '今回は"5"にしましょう';
local();
 ?>
