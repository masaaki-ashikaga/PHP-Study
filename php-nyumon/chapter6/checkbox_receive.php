<?php
$colors = $_POST['colors'];
// var_dump($colors);
?>

<html>
  <body>
    <h1>受信ページ</h1>
    <h3>好きな色</h3>
    <ul>
      <?php foreach($colors as $var){?>
      <li><?php echo htmlspecialchars($var, ENT_QUOTES, 'UTF-8'); ?></li>
    <?php } ?>
    </ul>
    <p>あなたの好きな色は<?php echo implode('と', $colors); ?>です。</p>
  </body>
</html>