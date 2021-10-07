<?php
require_once('funcs.php');
$pdo = db_conn();
$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM gs_user_table WHERE id =' . $id . ';');
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
            <legend>User Info</legend>
            <label>User Name：<input type="text" name="name" value="<?= h($row['name']) ?>"></label><br>
            <label>Login ID： <input type="id" name="lid" value="<?= h($row['lid']) ?>" ></label><br>
            <label>Login Pass： <input type="password" name="lpw" value="<?= h($row['lpw']) ?>" ></label><br>

            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="submit" value="UPDATE" class="sub_btn">
        </fieldset>
    </div>
 </form>
</div>  
</body>  

</html>