<?php

var_dump(time());
echo '<br>';

echo date("Y-m-d H:i:s", time());
echo '<br>';

//strtotime(特定日付のタイムスタンプ)
echo strtotime("1994/1/18 01:03:00");
echo '<br>';

// 先週の日曜日
echo strtotime("last Sunday");
echo '<br>';
// 2日後
echo strtotime("+2 day");
echo '<br>';
?>  