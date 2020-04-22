<?php
declare(strict_types=1); //強い型の表示

ini_set("display_errors", 1);
error_reporting(E_ALL);

echo 'タイプヒンティング' . '<br>';

function noTypeHint($string)
{
  var_dump($string);
}

noTypeHint(['テスト']);
echo '<br>';

function typeTest(string $string)
{
  var_dump($string);
}

//typeTest(['配列文字']);

?>