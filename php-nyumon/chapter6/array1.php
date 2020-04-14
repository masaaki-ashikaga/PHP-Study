<?php
$arrays = array(
  
  0 => array(
    'name' => '鈴木',
    'hobby' => 'テニス',
    'email' => 'sample@sample.com'
  ),
  1 => array(
    'name' => '山田',
    'hobby' => 'パソコン',
    'email' => 'sample2@sample2.com'
  ),
  2 => array(
    'name' => '斎藤',
    'hobby' => '水泳',
    'email' => 'sample3@sample2.com'
  )

  );
?>

<html>
  <body>
    <table border="1">
      <tr><td>名前</td><th>趣味</th><th>メールアドレス</th></tr>
      <?php foreach($arrays as $row){?>
        <tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['hobby']; ?></td>
          <td><?php echo $row['email']; ?></td>
        </th>
      </tr>
     <?php } ?>
    </table>
  </body>
</html>