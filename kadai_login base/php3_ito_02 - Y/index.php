<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manager Login</title>
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body>
<div class="container">  
 <form method="post" action="insert.php">
    <div class="login">
        <fieldset>
            <legend>Hello! Manager</legend>
            <label>M Name：<input type="text" name="name"></label><br>
            <label>M ID：<input type="id" name="lid"></label><br>
            <label>Password：<input type="password" name="lpw"></label><br>
            <label>Type：<input type="number" min="0" max="1" name="kanri_flg"></label><br>
            <label>Status：<input type="number" min="0" max="1" name="life_flg"></label><br>
            <input type="submit" value="LOGIN" value="Submit">
                                
            <!-- kanri_flg: ※0=管理者, 1=スーパー管理者 -->
            <!-- life_flg: ※0=退社, 1=入社 -->         
        </fieldset>
    </div>
 </form>
</div>  
</body>  

</html>
