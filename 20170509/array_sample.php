
<?php
    $a = array("C言語","Mysql","PHP","VPS");
    print_r($a);
 ?>
<br/><br/>

<?php
    $b = array("C言語","Mysql","PHP","VPS");
    echo $b[2];
 ?>
 <br/><br/>

<?php
    $c[0] = "C言語";
    $c[1] = "MySQL";
    $c[2] = "PHP";
    $c[3] = "ABC";
    print_r($c);
 ?>
<br/><br/>

<?php
    $d[] = "C言語";
    $d[] = "MySQL";
    $d[] = "PHP";
    $d[99] = "AKB";
    print_r($d);
    echo $d[99];
 ?>
