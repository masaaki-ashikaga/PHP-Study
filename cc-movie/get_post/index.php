<?php
//ログを取るか
ini_set('log_errors', 'on');
//ログの出力ファイルを指定
ini_set('error_log', 'php.log');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/base.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>データの取得とGETとPOSTの違いについて</title>
</head>
<body>
  <div class="container">
    <form action="confirm.php" method="POST" enctyle="multipart/form-data">
      <div class="form-group">
        <label>お名前</label>
        <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
        <label>メールアドレス</label>
        <input type="text" name="mail" class="form-control">
      </div>

      <div class="form-group">
        <label>性別</label>
        <div class="form-check"><input type="radio" name="gender" id="0" value="0" class="form-control">男性</div>
        <div class="form-check"><input type="radio" name="gender" id="1" value="1" class="form-control">女性</div>
      </div>

      <div class="form-group mt-4">
        <div class="col-sm-4">ご予約予定日</div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="reserve[]" value="2020年2月21日">2020年2月21日<br>
          <input class="form-check-input" type="checkbox" name="reserve[]" value="2020年2月22日">2020年2月22日<br>
          <input class="form-check-input" type="checkbox" name="reserve[]" value="2020年2月23日">2020年2月23日<br>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">確認する</button>
    </form>
  </div>
  
</body>
</html>