<?php
define('DB_NAME','checktest4');
define('DB_USERNAME','root');
define('DB_PASS','root');
define('DSN','mysql:host=localhost;charset=utf8;dbname='.DB_NAME);

function connect(){
    try{
        //PDOインスタンスの生成
        $pdo = new PDO(DSN,DB_USERNAME,DB_PASS);
        //エラー処理方法の設定
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }catch(PDOException $e){
        echo 'Error:'.$ep>getMessage();
        die();
    }

    }

?>
