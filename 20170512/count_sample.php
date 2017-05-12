<?php
    $dw = ["日","月","火","水","木","金","土"];
    $fp = fopen( "count.txt", "a+" ); // ファイル開く
    $count = fgets( $fp, 10 ); // 10桁分値読み取り
    trim($count);
    $count++; // 値+1（カウントアップ）
    rewind( $fp ); // ファイルポインタを先頭に戻す
    fputs( $fp, $count ); // 値書き込み
    fclose( $fp ); // ファイル閉じる
    $d = date("w") ;
    echo date("Y m/j") . "({$dw[$d]})" .  date("　G:i") ;
    echo "　あなたに" . $count . "個の消しゴムをあげます<br>" ;
?>
