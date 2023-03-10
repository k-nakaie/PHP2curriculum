<?php
  // 作成したdb_connect.phpを読み込む
require_once('db_connect.php');

// 実行したいSQL文を準備
// 今回はusersテーブルにレコードを追加
// $sql = "INSERT INTO users (name, password) VALUES ('Taro Yamada', 'taro')";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
// try {
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute();
//     echo 'インサートしました。';
// } catch (PDOException $e) {
//     echo 'Error: ' . $e->getMessage();
//     die();
// }
$sql= "SELECT * FROM users";
try{
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    //ループ分を使用して、１行ずつ読み込んで$rowに代入する
    //読み込むものがなくなったらループ終了
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo $row['id'].'、'.$row['name'].'、'.$row['password'];
        echo '<br>';
    }
}catch(PDOException $e){
    echo 'Error: '.$e->getMessage();
    die();
}



?>
