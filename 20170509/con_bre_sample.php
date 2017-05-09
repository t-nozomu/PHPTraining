<?php
    for ($i=0; $i < 10; $i++) {
        if ($i == 2) {
            echo "2に付いた<br>";
            //continue;
        }
        echo $i . "<br>";
    }
    echo "<hr>";
    for ($i=0; $i < 10; $i++) {
        if ($i == 2) {
            echo "最後になった<br>";
            //break;
        }
        echo $i . "<br>";
    }
 ?>
