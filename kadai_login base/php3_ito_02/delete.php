<?php

require_once('funcs.php');
$pdo = db_conn();
$id = $_GET['id'];


$stmt = $pdo->prepare('DELETE FROM gs_bm_table 
                       WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

$view = '';
if ($status == false) {
    sql_error($status);
} else {
    redirect('select.php');
}