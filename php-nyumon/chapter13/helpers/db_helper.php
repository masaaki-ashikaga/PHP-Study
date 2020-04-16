<?php
function get_db_connect(){
  try{
    $dsn = DSN;
    $user = DB_USER;
    $password = DB_PASSWORD;

    $dbh = new PDO($dsn, $user, $password);
  }catch (PDOException $e){
    echo ($e->getMessage());
    die();
  }
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $dbh;
}

function email_exists($dbh, $email){
  $sql = "SELECT COUNT(id) FROM members where email = :email";
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(':email', $email, PDO::PARAM_STR);
  $stmt->execute();
  $count = $stmt->fetch(PDO::FETCH_ASSOC);
  if($count['COUNT(id)'] > 0){
    return TRUE;
  }else{
    return FALSE;
  }
}

function insert_member_data($dbh, $name, $email, $password){
  $password = password_hash($password, PASSWORD_DEFAULT);
  $date = date('Y-m-d H:i:s');
  $sql = "INSERT INTO members (name, email, password, created) VALUE(:name, :email, :password, '{$date}')";
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(':name', $name, PDO::PARAM_STR);
  $stmt->bindValue(':email', $email, PDO::PARAM_STR);
  $stmt->bindValue(':password', $password, PDO::PARAM_STR);
  if($stmt->execute()){
    return TRUE;
  }else{
    return FALSE;
  }
}


?>