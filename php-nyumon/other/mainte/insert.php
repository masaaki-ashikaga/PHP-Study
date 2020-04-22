<?php

//php.ini  設定ファイル
ini_set("display_errors", 1);
error_reporting(E_ALL);

//DB接続  PDO
function insertContact($data){

  require 'db_connection.php';
  
  //入力  DB保存  prepare, bind, execute(配列(全て文字列の場合))
  $params = [
    'id' => null,
    'your_name' => $data['your_name'],
    'email' => $data['email'],
    'url' => $data['url'],
    'gender' => $data['gender'],
    'age' => $data['age'],
    'contact' => $data['contact'],
    'created_at' => null
  ];
  // $params = [
    //   'id' => null,
    //   'your_name' => 'なまえ123',
    //   'email' => 'test@test.com',
    //   'url' => 'https://test.com',
    //   'gender' => '1',
    //   'age' => '2',
    //   'contact' => 'いいえ',
    //   'created_at' => null
    // ];
    $count = 0;
    $columns = '';
    $values = '';
    
    foreach(array_keys($params) as $key){
      if($count++>0){
        $columns .= ',';
        $values .= ',';
      }
      $columns .= $key;
      $values .= ':'.$key;
    }
    
    $sql = 'insert into cantacts (' . $columns .')value(' . $values . ')'; //名前付きプレースホルダー
    
    // var_dump($sql);
    // exit();
    
    $stmt = $pdo->prepare($sql);//プリペアードステートメント
    $stmt->execute($params);
    
  }