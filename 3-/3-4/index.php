<?php
require_once("getData.php");

$data = new getData;

$users_data = $data->getUserData();
$post_data = $data->getPostData();
//取得できているかの確認
// var_dump($users_data);

//カテゴリを変換するためのメソッド
function change_category($category){
    if($category === "1"){
        echo "食事";
    }elseif($category === "2"){
        echo "旅行";
    }else{
        echo "その他";
    }
}

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="head clearfix">
            <img src="1599315827_logo.png" style="text-align: center" class="pic">
            <div class="head-right">
                <div class="right-up">
                    <p class="p1"><?php printf('ようこそ %s%s さん',$users_data["last_name"],$users_data["first_name"]) ; ?></p>
                </div>
                <div class="right-down">
                    <p><?php echo "最終ログイン日：".$users_data["last_login"]; ?></p>
                </div>
            </div>
        </div>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                   <th>記事ID</th>
                   <th>タイトル</th>
                   <th>カテゴリ</th>
                   <th>本文</th>
                   <th>投稿日</th> 
                </tr>
            </thead>
            <tbody>
                <!-- phpでDBからの取得をループで書き込む -->
                <?php foreach($post_data as $row){?>
                <tr>
                    
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php change_category($row['category_no']);?></td>
                    <td><?php echo $row['comment'];?></td>
                    <td><?php echo $row['created'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
    <footer>
        <p>Y&I group.inc</p>
    </footer>

    
</body>
</html>

