<?php
session_start();
require 'validation.php';

ini_set("display_errors", 1);
error_reporting(E_ALL);

echo '<pre>';
var_dump($_POST);
echo '</pre>';

header('X-FRAME-OPTIONS:DENY');

function h($str){
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$pageFlag = 0;
$error = validation($_POST);

if(!empty($_POST['btn_confirm']) && empty($error)){
  $pageFlag = 1;
}
if(!empty($_POST['btn_submit'])){
  $pageFlag = 2;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php if($pageFlag === 0): ?>
      <?php
      if(!isset($_SESSION['csrfToken'])){
        $csrfToken = bin2hex(random_bytes(32));
        $_SESSION['csrfToken'] = $csrfToken;
      }
      $token = $_SESSION['csrfToken'];
      ?>

      <?php if(!empty($_POST['btn_confirm']) && !empty($error)):?>
        <ul>
          <?php foreach($error as $value): ?>
            <li><?php echo $value; ?></li>
          <?php endforeach; ?>
        </ul>
          <?php endif; ?>

        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <form method="POST" action="input.php">
              <div class="form-group">
                <label for="your_name">氏名</label>
                <input type="text" class="form-control" name="your_name" value="<?php if(isset($_POST['your_name'])){ echo h($_POST['your_name']); } ?>" required><br>
              </div>
            

          <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" class="form-control" name="email" value="<?php if(isset($_POST['email'])){ echo h($_POST['email']);} ?>"><br>
          </div>
          
          <div class="form-group">
            <label for="url">ホームページ</label>
            <input type="url" class="form-control" name="url" value="<?php if(isset($_POST['url'])){ echo h($_POST['url']);} ?>"><br>
          </div>

          <div class="form-check form-check-inline">
            性別
            <input class="form-check-input" type="radio" name="gender" id="male" value="0"><label class="form-check-input" for="male">男性</label>
            <input type="radio" class="form-check-input" name="gender" id="female" value="1">
            <label class="form-check-input" for="female">女性</label>
          </div>

            <br>
            <div class="form-group">
              <label for="age">年齢</label>
              <select class="form-control" name="age">
                <option value="">選択して下さい。</option>
                <option value="1">〜19歳</option>
                <option value="2">20歳〜29歳</option>
                <option value="3">30歳〜39歳</option>
                <option value="4">40歳〜49歳</option>
                <option value="5">50歳〜59歳</option>
                <option value="6">60歳〜</option>
              </select>
            </div>
            <br>
            <div class="form-group">
              <label for="contact">お問い合わせ内容</label>
              <textarea class="form-control" name="contact" value="<?php if(isset($_POST['contact'])){ echo h($_POST['contact']);} ?>"></textarea>
            </div>
            <br>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" name="caution" value="1">
              <label for="caution">注意事項に同意する。</label>
            </div>
            <br>
            <input class="btn btn-info" type="submit" name="btn_confirm" value="確認する">
            <input type="hidden" name="csrf" value="<?php echo $token; ?>">
          </form>
          </div>
        </div>
      </div>
    <?php endif; ?>


    <?php if($pageFlag === 1): ?>
      <?php if($_POST['csrf'] === $_SESSION['csrfToken']): ?>
      <form method="POST" action="input.php">
        名前
        <?php echo h($_POST['your_name']); ?>
        <input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
        <br>
        メールアドレス
        <?php echo h($_POST['email']); ?>
        <br>
        ホームページ
        <?php echo h($_POST['url']); ?>
        <br>
        性別
        <?php if($_POST['gender'] === '0'){ echo '男性';}
              if($_POST['gender'] === '1'){ echo '女性';} ?>
        <br>
        年齢
        <?php if($_POST['age'] === '1'){echo '〜19歳';}
              elseif($_POST['age'] === '2'){echo '20歳〜29歳';}
              elseif($_POST['age'] === '3'){echo '30歳〜39歳';}
              elseif($_POST['age'] === '4'){echo '40歳〜49歳';}
              elseif($_POST['age'] === '5'){echo '50歳〜59歳';}
              elseif($_POST['age'] === '6'){echo '60歳〜';} ?>
        <br>
        お問い合わせ内容
        <?php echo h($_POST['contact']); ?>
        <br>
        注意事項のチェック
        <?php echo h($_POST['caution']); ?>

        <input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">
        <input type="hidden" name="url" value="<?php echo h($_POST['url']); ?>">
        <input type="hidden" name="gender" value="<?php echo h($_POST['gender']); ?>">
        <input type="hidden" name="age" value="<?php echo h($_POST['age']); ?>">
        <input type="hidden" name="contact" value="<?php echo h($_POST['contact']); ?>">
        <input type="hidden" name="caution" value="<?php echo h($_POST['caution']); ?>">
        <input type="submit" name="back" value="戻る">
        <input type="submit" name="btn_submit" value="送信する">
        <input type="hidden" name="csrf" value="<?php echo $token; ?>">
      </form>
      <?php endif; ?>
    <?php endif; ?>


    <?php if($pageFlag === 2): ?>
      <?php if($_POST['csrf'] === $_SESSION['csrfToken']): ?>
        <p>送信が完了しました。</p>
        <?php unset($_SESSION['csrfToken']); ?>
      <?php endif; ?>
    <?php endif; ?>


  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>