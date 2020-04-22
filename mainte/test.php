<?php
// //PASSを記録したファイル
// //PASS（暗号化）

// echo __FILE__;
// echo '<br>';
// echo password_hash('password123', PASSWORD_BCRYPT);

// //ファイルを丸ごと読み込む方法
$contactFile = '.contact.dat';
$fileContents = file_get_contents($contactFile);
// echo $fileContents;


//ファイルへ書き込む方法（上書き）
// file_put_contents($contactFile, '書き込みます。');

// $addText = 'テストです'."\n";

//ファイルに書き込み（追記）
// file_put_contents($contactFile, $addText, FILE_APPEND);

//配列  file ,区切る  explode, foreach

// $allData = file($contactFile);
// foreach($allData as $lineData){
//     $lines = explode(',', $lineData);
//     echo $lines[0].'<br>';
//     echo $lines[1].'<br>';
//     echo $lines[2].'<br>';
// }


$contactFile = '.contact.dat';

$contents = fopen($contactFile, 'a+');

$addText = '1行追記'."\n";

fwrite($contents, $addText);

fclose($contents);

?>