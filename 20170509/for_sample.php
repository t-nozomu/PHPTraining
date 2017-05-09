<?php
    for($a=0;$a<=3;$a++){
        echo $a."<br/>";
    }
 ?>

 <br><br>

 <?php
    $color = array("red","green","blue" );
    foreach ($color as $value) {
        print("{$value}<br/>");
    }
  ?>

<br><br>
  <?php
    $color = array("red","green","blue");
    foreach ($color as $iro => $value) {
        print("{$iro}:{$value}<br/>");
    }
   ?>
