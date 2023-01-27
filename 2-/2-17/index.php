<?php

    //サイコロを振った回数の変数
    $challenge = 0;
    //サイコロの出た目
    $dice = 0;
    //出た目の合計の変数
    $sum = 0;

    do{
        $dice = mt_rand(1,6);
        $sum += $dice;
        $challenge++;
        
        printf("%d回目=%d",$challenge,$dice);
        echo '<br>';
    }while($sum<40);

    printf("合計%d回目でゴールしました",$challenge);

?>  