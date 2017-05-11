<?php
    $data =  [["A","B","C","D","E"],
              ["F","G","H","I","J"],
              ["K","L","M","N","O"],
              ["P","Q","R","S","T"],
              ["U","V","W","X","Y"]];

    $edata = ["B","F","X"];

    for( $i = 0; $i < 5; $i++) {
        for ( $j = 0; $j < 5 ; $j++) {
                if($data[$i][$j] != "B" && $data[$i][$j] != "F" &&  $data[$i][$j] != "X"){
                 echo "Data[$i][$j]=" . $data[$i][$j] . "<br>" ;
             }
        }
    }
 ?>
