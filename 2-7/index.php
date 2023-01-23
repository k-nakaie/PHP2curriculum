<?php
    $color = ["red" => "赤", "blue" => "青", "green" => "緑"];

    var_dump($color);
    echo '<br>';

    $color["yellow"] ="黄色";
    var_dump($color);

    echo '<br>';
    echo '<br>';

    echo "単語チェック";
    echo '<br>';

    echo "1.プルリクエスト(マージリクエスト)<br>
        開発者のローカルリポジトリでの変更を他の開発者へ通知する機能<br>";

    echo "2.Git Flow<br>
    Gitの機能であるブランチを活用したGitの開発手法であり、ツールの名前でもある。<br>
    コンフリクトやマージのミスを減らすためのもの。<br>
    それぞれ役割が振られているmaster, release, develop, feature, hot-fixの5つのブランチを使い分けて、開発を進めていく。<br>";

    echo "3.CRON<br>
        多くのUNIX系OSで標準的に利用される常駐プログラムの一種で、<br>
        利用者の設定したスケジュールに従ってプログラムを定期的に起動してくれるもの。<br>";

?>