<?php
    $dw = ["日","月","火","水","木","金","土"];
    $fp1 = fopen( "count.csv", "r+" );


    $count = fgets($fp1);
    $count_f =explode(",",$count);
    $count_n = $count_f[0] + 1 ;

    $year = date("Y");
    $m_d = date("m/j");
    $day_week = $dw[date("w")];
    $time = date("H:i:s");

        echo $count_f[0].",".$count_f[1] ."<br>";
        echo  "$count_n,$year $m_d ($day_week) $time<br>" ;
        rewind($fp1);
        fputs($fp1, "$count_n,$year $m_d ($day_week) $time\n");

    fclose($fp1);

?>
