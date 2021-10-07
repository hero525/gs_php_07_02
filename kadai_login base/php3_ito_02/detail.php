<?php
require_once('funcs.php');
$pdo = db_conn();
$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id =' . $id . ';');
$status = $stmt->execute();

$view = '';
if ($status == false) {
    sql_error($status);
} else {
    $row = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Admin</title>
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body>
<div class="container">  
 <form method="post" action="update.php">
    <div class="login">
        <fieldset>
            <legend>Welcom!</legend>
            <label>User name：<input type="text" name="name" placeholder="名前を入力してください" class="data_insert" value="<?= h($row['name']) ?>"></label><br>
            <label>Email：<input type="email" name="email" placeholder="メールアドレスを入力してください" class="data_insert" value="<?= h($row['email']) ?>"></label><br>
            <label>Password：<input type="password" name="password" placeholder="パスワードを入力してください" class="data_insert" value="<?= h($row['password']) ?>"></label><br>
            <label>Comment：<textarea name="comment" rows="4" cols="40" placeholder="任意でコメントを入力してください" class="data_insert"><?= h($row['comment']) ?></textarea></label><br>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="submit" value="UPDATE" class="sub_btn">
        </fieldset>
    </div>
 </form>
</div>  
</body>  

</html>