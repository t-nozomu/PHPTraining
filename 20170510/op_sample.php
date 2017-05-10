<ul>
    <li>
        算術演算子（サンプル）
    </li>
<?php
    function br() {
        echo "<br>" ;
    }
    $x = 10 ;
    $y = 6 ;
    echo $x % $y ;
?>
    <li>
        代入演算子(サンプル)
    </li>
<?php
    $x = 20 ;
    $x += 100 ;
    echo $x ;
 ?>
    <li>
        比較演算子(== ===)
    </li>
<?php
    $x = 100 ;
    $y = "100" ;

    echo var_dump($x == $y) . "<br>" ;
    echo var_dump($x === $y) . "<br>" ;
?>
    <li>
        比較演算子(>= )
    </li>
    <?php
        $x = 50 ;
        $y = 50 ;

        var_dump($x >= $y);
     ?>
     <li>
         インクリメント演算子
     </li>
     <?php
        $x = 15 ;
        echo ++$x . "<br>";
        $x = 10 ;
        echo $x++ ;
      ?>
    <li>
            論理演算子
    </li>
    <?php
        $x = 100 ;
        $y = 50 ;

        if($x == 100 and $y == 50) {
            echo "Hello world!" ;
        }
    ?>
    <li>
        文字列演算子(. .=)
    </li>
    <?php
        $txt1 = "Hello" ;
        $txt2 = "world!" ;
        echo $txt1 . $txt2 ;

        $txt1 .= $txt2 ;
        echo $txt1 ;
     ?>
     <li>
         課題1
     </li>
     <?php
        $x = 10 ;
        $x %= 4 ;
        echo $x ;
      ?>
     <li>
         課題2
     </li>
     <?php
        $x = 10;
        $x *= 7 ;
        echo $x ;
      ?>
</ul>
