<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $food = htmlspecialchars($_POST['food']);
  
  if(mb_strlen($food) === 0){
    echo '好きな食べ物を入力して下さい。';
  }elseif(mb_strlen($food) > 20){
    echo '20文字以内で入力して下さい。';
    var_dump($food);
  }
}
?>

<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/base.css">

</head>

<body>
  <h1>好きな食べ物</h1>
  <form action="" method="POST">
    <?php 
    if(isset($err)){
      echo $err.'<br>';
      }elseif(isset($food)){
        echo 'あなたの好きな食べ物は'.$food.'です。<br>';
        } ?>
    好きな食べ物は？<input type="text" name="food">
    <input type="submit" value="送信">
  </form>

</body>

</html>