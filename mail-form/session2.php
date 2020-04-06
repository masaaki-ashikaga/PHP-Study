<?php
error_reporting(E_ALL); //エラー表示
ini_set('display_errors', 'On'); //画面に表示

session_start(); //Sessionを使用

echo 'セッションを破棄しました。';

$_SESSION = [];
session_destroy();

if(isset($_COOKIE['PHPSESSID'])){
  setcookie('PHPSESSID', '', time(), -1800, '/');
}


echo '<pre>';
var_dump($_SESSION);
echo '<pre>';

echo '<pre>';
var_dump($_COOKIE);
echo '<pre>';