<?php

    
    for($i = 1; $i<= 100; $i++){
        if($i%3 === 0 && $i%5 === 0){
            echo "FizzBuzz!!";
            echo '<br>';
        }elseif($i%3 === 0){
            echo "Fizz!";
            echo '<br>';
        }elseif($i%5 === 0){
            echo "Buzz!";
            echo '<br>';
        }else{
            echo $i;
            echo '<br>';
        
        }
    }
    echo '<br>';
    echo "IT用語<br>";
    echo "1.パフォーマンス<br>";
    echo "コンピュータやソフトウェア、システムなどの処理能力や実行速度などのこと<br>";
    echo "2.スロークエリ<br>";
    echo "DBMSに対する問い合わせのうち、一定の基準に照らして遅く時間がかかっているもの<br>
        システム性能の制約となるボトルネックとなっている可能性が高い箇所とみなされる<br>";
    echo "3.クエリログ<br>";
    echo "DBMSに対して実行した過去のクエリの履歴のこと。一定期間保管される<br>";
?>