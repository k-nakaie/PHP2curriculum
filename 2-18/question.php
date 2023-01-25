<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <?php

    //POST送信で送られてきた名前を受け取って変数を作成
    $my_name = $_POST['my_name'];

    //①画像を参考に問題文の選択肢の配列を作成してください。
    $port = [80,22,20,21];
    $language = ["PHP","Python","JAVA","HTML"];
    $command = ["join","select","insert","update"];

    //② ①で作成した、配列から正解の選択肢の変数を作成してください
    $true_port = $port[0];
    $true_language = $language[3];
    $true_command = $command[1];

    // var_dump($a_port);
    // var_dump($a_language);
    // var_dump($command);
    // var_dump($true_command);

    ?>
    <p class="otukare">お疲れ様です<?php echo $my_name; ?>さん</p>
    <!--フォームの作成 通信はPOST通信で-->
    <form action="answer.php" method="post">
        <h2>①ネットワークのポート番号は何番？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php
        foreach($port as $value){ ?>
        <input type="radio" name="port" value="<?php echo $value; ?>">
        <?php echo $value;
        }
        ?>


        <h2>②Webページを作成するための言語は？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php
        foreach($language as $value){ ?>
        <input type="radio" name="language" value="<?php echo $value; ?>">
        <?php echo $value;
        }
        ?>

        <h2>③MySQLで情報を取得するためのコマンドは？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php

        // var_dump($command);

        foreach($command as $value){ ?>
        <input type="radio" name="command" value="<?php echo $value; ?>">
        <?php echo $value;
        }
        ?>
        <?php echo '<br>'; ?>
        <input type="hidden" name="my_name" value=<?php echo $my_name; ?>>
        <input type="hidden" name="true_port" value=<?php echo $true_port; ?>>
        <input type="hidden" name="true_language" value=<?php echo $true_language; ?>>
        <input type="hidden" name="true_command" value=<?php echo $true_command; ?>>
        <input type="submit" name="bottun" value="回答する" class="a_botton">
    </form>
    
</body>
</html>



