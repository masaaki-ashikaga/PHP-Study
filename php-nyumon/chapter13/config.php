<?php
//defineで定義することで他のファイルでも変更されない定数になる。
define('DSN', 'mysql:dbname=sample;host=localhost;charset=utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('SITE_URL', 'http://localhost/code-creater/php-nyumon/chapter13/');

//E_NOTICE以外のエラーを全て出力する。
error_reporting(E_ALL & ~E_NOTICE);

//SESSIONの設定（SESSIONの有効期限, '有効範囲'） ←'/'で全範囲で有効という意味
session_set_cookie_params(1440, '/');
?>