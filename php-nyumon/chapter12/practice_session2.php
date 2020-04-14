<?php
session_start();
$_SESSION['age'] = 40;
unset($_SESSION['email']);
?>

<html>
  <body>
    <h1>セッションの練習０２</h1>
    <?php var_dump($_SESSION); ?>
  </body>
</html>