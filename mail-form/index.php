<?php
//要件定義
// ・入力項目は、お名前・メールアドレス
// ・各種バリデーションをつける
// ・送信者に自動返信メール機能をつける
// ・セキュリティー対策をお願いします。（XSS・CSRF）
// ・入力画面→確認画面→完了画面を分けて作成

//エラーをブラウザに出す
error_reporting(E_ALL); //エラーを全て表示
ini_set('display_errors', 'On'); //ブラウザ画面にエラーを表示

//Session開始
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  //未入力チェック
  $name = $_POST['name'];
  $mail = $_POST['mail'];

  require('validation.php');

  if(empty($error)){
    
    header('Location: confirm.php');

    $_SESSION['name'] = $name;
    $_SESSION['mail'] = $mail;

    exit();
  }
  
}

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
    <form action="" method="POST">
      <div calss="form-group">
        <label>お名前</label>
        <input type="text" name="name" class="form-control">
        <p class="text-danger"><?php if(!empty($error['name'])) echo $error['name'] ?></p>
      </div>

      <div class="form-group">
        <label>メールアドレス</label>
        <input type="text" name="mail" class="form-control"> 
        <p class="text-danger"><?php if(!empty($error['mail'])) echo $error['mail'] ?></p>

      </div>
      <button type="submit" class="btn btn-primary">確認する</button>
    </form>
  </div>
  
</body>
</html>