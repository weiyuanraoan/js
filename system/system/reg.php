<?php 
require('inc/pdo.php');
$sql="select * from com_tab";
// echo $sql;
$rs=$pdo->query($sql);
$result=$rs->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>系统注册</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form action="do_reg.php" method="post" class="frm reg" name="f1">
        <h1>系统注册</h1>
        <p>
            <input type="text" name="com_name" class="text" placeholder="用户名">
        </p>
        <p>
            <input type="password" name="com_pass" class="text" placeholder="密码">
        </p>
        <p>
            <button type="button" class="btn" onclick="check();">注册</button>
        </p>
    </form>
    <script src="js/login.js"></script>
</body>
</html>