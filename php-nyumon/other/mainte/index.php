<?php

require 'db_connection.php';

//ユーザー入力なし  query
// $sql = 'select * from cantacts where id = 2';
// $stmt = $pdo->query($sql);
// $result = $stmt->fetchall();
// echo '<pre>';
// var_dump($result);
// echo '</pre>';

//ユーザー入力あり  prepare, bind, execute  悪意ユーザー SQLインジェクション
$sql = 'select * from cantacts where id = :id'; //名前付きプレースホルダー
$stmt = $pdo->prepare($sql);//プリペアードステートメント
$stmt->bindValue('id', 3, PDO::PARAM_INT); //紐付け
$stmt->execute();
$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';


//トランザクション  まとまって処理  beginTransaction, commit, rollback
//ex) 銀行  残高を確認 -> Aさんから引き落とし -> Bさんに振込
//どこかで通信が切れても全ての処理を一纏めにしているから、エラーになれば最初に戻るようにする

$pdo->beginTransaction();

try{
  
$stmt = $pdo->prepare($sql);//プリペアードステートメント
$stmt->bindValue('id', 3, PDO::PARAM_INT); //紐付け
$stmt->execute();

$pdo->commit();

} catch(PDOException $e){
  $pdo->rollback(); //更新のキャンセル
}


?>