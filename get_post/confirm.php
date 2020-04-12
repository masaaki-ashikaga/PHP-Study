<?php
//ログを取るか
ini_set('log_errors', 'on');
//ログの出力ファイルを指定
ini_set('error_log', 'php.log');

if($_POST['gender'] == 0){
  $gender = '男性';
}else{
  $gender = '女性';
}

//バリデーション
//未入力に対して
if(empty($_POST['name'])){
  $error['name'] = '必須項目です。';
}elseif(mb_strlen($_POST['name']) > 10){
  $error['name'] = '10文字以内で入力して下さい。';
}
//正規表現
if(empty($_POST['mail'])){
  $error['mail'] = '必須項目です。';
}elseif(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
  $error['mail'] = '正しい形式で入力して下さい。';
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <title>データの取得とGETとPOSTの違いについて</title>
</head>
<body>
  <div class="container">
    <form action="confirm.php" method="POST" enctyle="multipart/form-data">
      <div class="form-group">
        <label>お名前</label>
        <p><?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'); ?></p>
        <p class="text-danger"><?php echo $error['name']; ?></p>
      </div>
      <div class="form-group">
        <label>メールアドレス</label>
        <p><?php echo htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8'); ?></p>
        <p class="text-danger"><?php echo $error['mail']; ?></p>
      </div>
      <div class="form-group">
        <label>性別</label>
        <p><?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?></p>
      </div>
      <div class="form-group">
        <label>ご予約予定日</label>
        <p><?php foreach($_POST['reserve'] as $value){
          echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        } ?></p>
      </div>

      <button type="submit" class="btn btn-primary">確認する</button>
    </form>
  </div>
  
</body>
</html>