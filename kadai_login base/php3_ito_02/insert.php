<?php

require_once('funcs.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$comment = $_POST['comment'];

$pdo = db_conn();

$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, name, email, password, comment, date)
                       VALUES(NULL, :name, :email, :password, :comment, sysdate())");

$stmt->bindValue(':name', $name, PDO::PARAM_STR); 
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);

$status = $stmt->execute();

//データ登録処理後
if ($status == false) {
  sql_error($stmt);
} else {
  redirect('index.php');
}
