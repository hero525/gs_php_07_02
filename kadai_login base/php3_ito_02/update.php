<?php

require_once('funcs.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$comment = $_POST['comment'];
$id = $_POST['id'];

$pdo = db_conn();

$stmt = $pdo->prepare("UPDATE gs_bm_table 
                       SET
                       name =:name,
                       email = :email,
                       password = :password,
                       comment = :comment,
                       date = sysdate()
                       WHERE
                       id = :id;");

$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ更新処理後
if ($status == false) {
  sql_error($stmt);
} else {
  redirect('index.php');
}