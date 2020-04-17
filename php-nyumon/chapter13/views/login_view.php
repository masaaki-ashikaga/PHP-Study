<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
  </head>
  <body>
    <h1>ログイン</h1>
    <form action="" method="POST">
      <p>メールアドレス：<input type="text" name="email"><?php echo html_escape($errs['email']); ?></p>
      <p>パスワード：<input type="password" name="password"><?php echo html_escape($errs['password']); ?></p>
      <p><input type="submit" value="ログイン"></p>
      <p><a href="sugnup.php">新規投稿</a></p>
    </form>
  </body>
</html>