<?php
session_start();
$session_name = session_name();
$_SESSION = array();

if(isset($_COOKIE[$session_name]) === TRUE){
  setcookie($session_name, '', time() - 3600);
}

session_destroy();
header('Location: cart.php');
exit;
?>

<html>
  <body>
    <a href="cookie_set.php">戻る</a>
  </body>
</html>