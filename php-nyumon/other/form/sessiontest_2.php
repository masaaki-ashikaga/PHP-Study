<?php

session_start();

?>


<html>
<head></head>
<body>
<?php
    echo 'セッションを破棄しました。';

    $_SESSION = [];  //空で上書きする。

    if(isset($_COOKIE['PHPSESSID'])){
      setcookie('PHPSESSID', '', time() - 1800, '/');
    }

    session_destroy();

    echo 'セッション';
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';

    echo '<pre>';
    var_dump($_COOKIE);
    echo '</pre>';
?>

</body>
</html>