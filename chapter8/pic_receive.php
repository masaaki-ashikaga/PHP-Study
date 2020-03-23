<?php
$err = array();
$img = $_FILES['img'];
var_dump($img);
$type = exif_imagetype($img['tmp_name']);
if($type !== IMAGETYPE_JPEG && $type !== IMAGETYPE_PNG){
  $err['pic'] = '対象ファイルはPNGまたはJPGのみです。';
}elseif($img['size'] > 102400){
  $err['pic'] = 'ファイルサイズは100KB以下にして下さい。';
}else{
  $extension = pathinfo($img['name'], PATHINFO_EXTENSION);
  $new_img = md5(uniqid(mt_rand(), true)).'.'.$extension;
  move_uploaded_file($img['tmp_name'], './img/' .$new_img);
}

move_uploaded_file($img['tmp_name'], './img/'.$img['name']);
?>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>受信ページ</h1>
    <?php if(count($err) > 0){
      foreach($err as $row){
        echo '<p>'.$row.'</p>';
      }
      echo '<a href="./sample8-3_send.php>戻る</a>';
    }else{
      ?>
      <div><img src="http://localhost/chapter8/img/<?php echo $img['name'];?>"></div>
    <?php
    }?>
  </body>
</html>