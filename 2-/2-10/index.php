<?php

    function A($tate,$yoko,$takasa){
        $taiseki = $tate*$yoko*$takasa;
        return "縦".$tate."cmで横が".$yoko."cm、高さが".$takasa."cmの長方体の体積は、<br>".$taiseki."立方cmです";

    }

    echo A(5,10,8);


    echo '<br>';
    echo '<br>';
    echo "IT用語<br>";
    echo "1.ハッシュ化<br>";
    echo "特定のルールに基づいた計算手順によって別の値に置き換えること。<br>
        ハッシュから元の値を割り出すことができない不可逆性を持っている。<br>";
    echo "2.総合テスト<br>";
    echo "構築したシステムが全体で予定通りの機能を満たしているかや仕様通りに構築できているかを<br>
        本番とほぼ同じ環境でテストを実施すること。<br>";
    echo "3.デバッグ<br>";
    echo "コンピュータプログラムに潜む欠陥を探し出して取り除くこと<br>";
?>