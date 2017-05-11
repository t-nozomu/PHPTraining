<?php
    function writeMsg(){
        echo "Hello world!! <br>" ;
    }

    writeMsg();
?>

<?php
    function familyName($fname){
        echo "$fname yamada <br>" ;
    }

    familyName("yuuki");
    familyName("hirobumi");
    familyName("yukiko");
    familyName("hanako");
    familyName("keichi");
?>

<?php
    function familyName1($fname,$year){
        echo "{$fname} yamadaがうまれた年は {$year} <br>" ;
    }

    familyName1("yuuki" , "1975");
    familyName1("hirobumi" , "1978");
    familyName1("yukiko" , "1983");
?>

<?php
    function setHigh($minheight = 50) {
        echo "高さは : $minheight <br>" ;
    }
    setHigh(350);
    setHigh();
    setHigh(135);
    setHigh(80);
?>

<?php
    function sum($x , $y){
        $z = $x + $y ;
        return $z;
    }
    echo " 5 + 10 =" . sum(5,10) . "<br>" ;
    echo " 7 + 13 =" . sum(7,13) . "<br>" ;
    echo " 2 +  4 =" . sum(2, 4) . "<br>" ;
 ?>

 <?php
    function training($start){
        echo "$start <br>" ;
    }

    training("2017年度の新入社員研修がスタートしました。頑張りましょう");
?>

<?php
    function addfive( $num ){
        $num += 5 ;
    }
    function addsix( &$num ){
        $num += 6 ;
    }

    $orignum = 10 ;
    addfive( $orignum ) ;

    echo "元の値は $orignum <br>" ;

    addsix( $orignum ) ;

    echo "元の値は $orignum <br>" ;
 ?>
