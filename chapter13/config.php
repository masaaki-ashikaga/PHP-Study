<?php

define('DSN', 'mysql:dbname=sample;host=localhost;charset=utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('SITE_URL', 'http://localhost/chapter13/');

error_reporting(E_ALL & ~E_NOTICE);
session_set_cookie_params(1440, '/');

?>