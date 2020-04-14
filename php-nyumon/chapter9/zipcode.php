<?php
$zipcode1 = '115-0002';
$zipcode2 = '220-601';

$result1 = preg_match('/\A([0-9]{3})-([0-9]{4})\z/', $zipcode1);
$result2 = preg_match('/\A([0-9]{3})-([0-9]{4})\z/', $zipcode2);

var_dump($result1);
var_dump($result2);
echo '<br>'

?>

<!-- practice8-1 -->
<?php
$str1 = '0120';
$str2 = '090';

$result3 = preg_match('/\A([0-9]{4})\z/', $str1);
$result4 = preg_match('/\A([0-9]{4})\z/', $str2);

var_dump($result3);
var_dump($result4);
echo '<br>'
?>


<!-- practice8-2 -->
<?php

$str3 = '今日は曇りです。';
$str4 = '明日は快晴でしょう。';

$result5 = preg_match('/\Aでしょう\z/u', $str3);
$result6 = preg_match('/\Aでしょう。\z/u', $str4);

var_dump($result5);
var_dump($result6);

echo '<br>'

?>