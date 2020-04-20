<?php
    
    $dsn = "mysql:dbname=sample;host=localhost;charset=utf8";
    $user = "root";
    $password = "root";
    
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //ここまででデータベースの接続は完了している。
    
    
    $name = $_POST['name'];
    $area = $_POST['area'];
    
    if(!empty($name) && !empty($area)){
        $sql = 'INSERT INTO code_create_user (name, area) VALUE (:name, :area)';
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':area', $area, PDO::PARAM_STR);
        $stmt->execute();
    }
    
    $sql = 'SELECT * FROM code_create_user';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //ここまでがセレクト文
    
    var_dump($name);
    var_dump($area);
    

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    <?php
    print '<br>';
        foreach($users as $user){
            print '<br>';
            print $user['name'];
            print $user['area'];
            print '<br>';
        }
    ?>
    <form action="" method="POST">
        お名前
        <input type="text" name="name">
        出身地
        <input type="text" name="area">
        <input type="submit" value="登録">
    </form>
    
    </body>
</html>