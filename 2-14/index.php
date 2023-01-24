<?php
//count（要素の数を数える）
$menbers = ["hosoi","hosoyama","hosoda","hosomura"];
echo count($menbers);
echo '<br>';


//sort（要素の並べ替え）
sort($menbers);
var_dump($menbers);
echo '<br>';

//in_array（配列に中にある要素が存在しているか）
var_dump(in_array("hosoda",$menbers));
echo '<br>';

if(in_array("hosoyama",$menbers)){
    echo "細山は実在する";
}else{
    echo "細山は実在しない";
}
echo '<br>';

//implode（配列を結合して文字列に変換）
$atstr = implode("様",$menbers);
var_dump($atstr);
echo '<br>';

//explode（文字列を指定の区切りで配列にする）
$re_members = explode("様",$atstr);
var_dump($re_members);
?>  