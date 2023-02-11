<?php

$user_name = $_POST['my_name'];
$user_kana = $_POST['kana'];
$tel = $_POST['tel'];
$prefectures =$_POST['prefectures'];
$city =$_POST['city'];
$town =$_POST['town'];
$apart =$_POST['apart'];
$time =$_POST['time'];

?>
<p>入力内容をご確認ください</p>
<p>名前：<?php echo $user_name."(".$user_kana.")"; ?></p>
<p>電話番号：<?php echo $tel; ?></p>
<p>住所<?php echo $prefectures.$city.$town.$apart; ?></p>
<p>申込期間：<?php echo $time; ?></p>
