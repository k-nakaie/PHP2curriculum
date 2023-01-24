<?php
//ceil（切り上げ）
$x = 8.2;
echo ceil($x);
echo '<br>';


//floor（切り捨て）
$y = 1.3;
echo floor($y);
echo '<br>';

//round（四捨五入）
$z = 5.5;
echo round($z);
echo '<br>';

//pi（円周率）
echo pi();
echo '<br>';

//mt_rand（乱数）
echo mt_rand(1,100);
echo '<br>';

//strlen（文字列の長さ）
$str = "nandeyanen";
echo strlen($str);
echo '<br>';

//strpos（検索）
echo strpos($str,"y");
echo '<br>';

//substr（文字列の切り取り）
echo substr($str,-5,3);
echo '<br>';

//str_replace（置換）
echo str_replace("yanen","desuka?",$str);
echo '<br>';

//printf（フォーマット化した文字列を出力）
$name = "近藤さん";
$limit_life = 5;
echo printf("%sの寿命はあと%d年です",$name,$limit_life);
echo '<br>';

//sprintf（変数に代入できるprintf）
$limit_life2 = 50;
$limit = sprintf("間違えました。%sの残り寿命はあと%d年です",$name,$limit_life2);
echo $limit;
?>  