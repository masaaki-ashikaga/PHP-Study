<?php
//エラーをブラウザに出す
error_reporting(E_ALL); //エラーを全て表示
ini_set('display_errors', 'On'); //ブラウザ画面にエラーを表示


session_start();

//XSS対策
function h($str){
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
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
        <p><?php echo h($_SESSION['name']) ?></p>
      </div>

      <div class="form-group">
        <label>メールアドレス</label>
        <p><?php echo h($_SESSION['mail']) ?></p>
      </div>
      <button type="submit" onclick="history.back()" class="btn btn-primary">戻る</button>
      <button type="submit" class="btn btn-primary">送信する</button>
    </form>
  </div>
  
</body>
</html>