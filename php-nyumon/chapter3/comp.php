<!DOCTYPE html>
<html lang="js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP practice01</title>
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/style.css">

</head>
<body>
  <?php
   $user_name = $_POST['user_name'];
   $hobby = $_POST['hobby'];
  ?>

<h1>登録ページ</h1>
<p>こんにちは<?php echo $user_name ?>さん</p>
<p>趣味は<?php echo $hobby ?>ですね</p>
<p>登録完了いたしました。</p>


</body>
</html>