<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP practice01</title>
</head>
<body>
  <?php
   $user_name = $_POST['user_name'];
   $hobby = $_POST['hobby'];
  ?>

<h1>受信ページ</h1>
<p>あなたの名前は鈴木さんです。</p>

<form action="./comp.php" method="POST">
<p>あなたの名前は<?php echo $user_name ?>さんです。</p>
<p>趣味は<?php echo $hobby ?>です。</p>
<p>こちらの情報でよろしいですか？</p>
<input type="hidden" name="user_name" value="<?php echo $user_name ?>">
<input type="hidden" name="hobby" value="<?php echo $hobby ?>">
<input type="submit" value="登録">
</form>

</body>
</html>


