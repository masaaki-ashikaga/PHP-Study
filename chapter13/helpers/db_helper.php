<?php
function get_db_connect(){
  try{
    $dsn = DSN;
    $user = DB_USER;
    $password = DB_PASSWORD;

    $dbh = new PDO($dsn, $user, $password);
  }catch(PDOException $e){
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
?>