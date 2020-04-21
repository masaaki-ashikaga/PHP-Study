<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP practice01</title>
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/style.css">

</head>
<body>
  <h1>練習フォーム</h1>
  <p>次のページへデータを渡してみよう。</p>
  <form action="./confirm.php" method="POST">
  <label for="user_name">お名前</label>
  <input type="text" name="user_name">
  <label for="hobby">趣味</label>
  <input type="text" name="hobby">
  <input type="submit" value="確認する">
  </form>

</body>
</html>