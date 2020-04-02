<?php

if(empty($_POST['name'])){
  $error['name'] = '必須項目です。';
}else if(mb_strlen($_POST['name']) > 10){
  $error['name'] = '10文字以内で入力して下さい';
}

if(empty($_POST['mail'])){
  $error['mail'] = '必須項目です。';
}else if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
  $error['mail'] = 'メールアドレスを正しい形式で入力して下さい。';
}

?>