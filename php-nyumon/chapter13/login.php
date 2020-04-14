<?php

require_once('config.php');
require_once('./helpers/db_helper.php');
require_once('./helpers/extra_helper.php');

session_start();

if(!empty($_SESSION['member'])){
  header('Location: ' . SITE_URL . '/member.php');
  exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $email = get_post('email');
  $password = get_post('password');

  $dbh = get_db_connect();
  $errs = array();

  if(!email_exists($dbh, $email)){
    $errs['emial'] = 'メールアドレスが登録されていません。';
  }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errs['email'] = 'メールアドレスの形式が正しくない';
  }elseif(!check_words($email, 200)){
    $errs['email'] = 'メール欄は必須、200文字以下で入力して下さい。';
  }

  if(!check_words($password, 50)){
    $errs['password'] = 'パスワードは必須、50文字以下で入力して下さい。';
  }elseif(!$member = select_member($dbh, $email, $password)){
    $errs['password'] = 'パスワードとメールアドレスが正しくありません。';
  }

  if(empty($errs)){
    session_regenerate_id(true);
    $_SESSION['member'] = $member;
    header('Location: ' . SITE_URL . 'member.php');
    exit;
  }
}
include_once('./views/login_view.php');
?>