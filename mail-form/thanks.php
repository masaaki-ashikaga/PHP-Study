<?php
//エラーをブラウザに出す
error_reporting(E_ALL); //エラーを全て表示
ini_set('display_errors', 'On'); //ブラウザ画面にエラーを表示

//sessionの開始
session_start();

//メール送信設定
mb_language('Japanese');
mb_internal_encoding('UTF-8');

//送信元
$from = '運営事務局';
$from_to = 'info@startkit.jp';

//件名
$subject = 'サイトからお問い合わせがありました。';

$message = <<<EOM

以下の内容でお問い合わせがありました。
=============================
お名前：{$_SESSION['name']}
メールアドレス：{$_SESSION['mail']}
=============================
EOM;

mb_send_mail($from_to, $subject, $message);

//session削除
$_SESSION = [];
session_destroy();

//自動返信


?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>mail form practice</title>
</head>
<body>
  <div class="container">
    <h1>お問い合わせありがとうございます。</h1>
    <p><a href="index.php">フォームに戻る</a></p>
  </div>
  
</body>
</html>