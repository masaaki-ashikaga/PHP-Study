<?php
error_reporting(E_ALL); //エラー表示
ini_set('display_errors', 'On'); //画面に表示

session_start(); //Sessionを使用

if(!isset($_SESSION['visit'])){
  echo '初回訪問です。';
  $_SESSION['visit'] = 1;
  $_SESSION['date'] = date('c');
} else {
  $visit = $_SESSION['visit'];
  $visit++;
  $_SESSION['visit'] = $visit;

  echo $_SESSION['visit'] . '回目の訪問<br>';

  if(isset($_SESSION['date'])){
    echo '前回の訪問は' . $_SESSION['date'] . 'です。';
    $_SESSION['date'] = date('c');
  }
}

echo '<pre>';
var_dump($_SESSION);
echo '<pre>';

echo '<pre>';
var_dump($_COOKIE);
echo '<pre>';