<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>answer</title>
    <link rel="stylesheet" href="style3.css">
</head>
</head>
<body>
    <?php 
    //[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
    $my_name = $_POST['my_name'];

    $a_port = $_POST['port'];
    $a_language = $_POST['language'];
    $a_command = $_POST['command'];

    $PORT = $_POST['true_port'];
    $LANGUAGE = $_POST['true_language'];
    $COMMAND = $_POST['true_command'];

    // var_dump($a_port);
    // var_dump($a_language);
    // var_dump($a_command);

    //選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
    function check($answer,$true_answer){
        if($answer == $true_answer){
            echo "正解！";
        }else{
            echo "残念・・・";
        }
    }


    ?>
    <p class="kekka"><?php echo $my_name; ?>さんの結果は・・・？</p>
    <p><?php echo $PORT; ?> </p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php check($a_port,$PORT); ?>
    <p><?php echo $LANGUAGE; ?></p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php check($a_language,$LANGUAGE); ?>
    <p><?php echo $COMMAND; ?></p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php check($a_command,$COMMAND); ?>
        
</body>
</html>

