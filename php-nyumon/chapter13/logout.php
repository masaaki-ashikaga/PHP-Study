<?php
require_once('config.php');
session_start();

$session_name = session_name();
$_SESSION = [];
session_destroy();

if(isset($_COOKIE[$session_name]) === TRUE){
  setcookie($session_name, '', time() - 3600, '/');
}


header('Location: '.SITE_URL.'login.php');

?>