<?php



    //標準時刻設定
    date_default_timezone_set('Asia/Tokyo');
    //現在時を24時間表記で取得
    $time = date("H");
    //整数系に変換
    $time_set = intval($time);
    // var_dump($time_set);

    //条件分岐
    if($time > 4 && $time < 10){
        echo "今".$time_set."時台です<br>";
        echo "おはようございます";
    }elseif($time > 10 && $time <16){
        echo "今".$time_set."時台です<br>";
        echo "こんにちわ";
    }else{
        echo "今".$time_set."時台です<br>";
        echo "こんばんわ";
    }
    
?>  