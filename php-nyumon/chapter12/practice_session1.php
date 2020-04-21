<?php
session_start();
$_SESSION['age'] = 36;
$_SESSION['email'] = 'sample@sample.com';
?>

<html>
  <body>
    <h1>セッションの練習０１</h1>
    <?php var_dump($_SESSION); ?>
    <p><a href="practice_session2.php">session更新</a></p>
  </body>
</html>