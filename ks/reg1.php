<?php 
require('inc/pdo.php');
$sql="select * from pers_tab";
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
    <form action="do_reg1.php" method="post" class="frm reg" name="f1">
        <h1>系统注册</h1>
        <p>
            <input type="text" name="username" class="text" placeholder="用户名">
        </p>
        <p>
            <input type="password" name="password" class="text" placeholder="密码">
        </p>
        <p>
            <input type="text" name="pers_age" class="text" placeholder="年龄">
        </p>
        <p>
            <input type="text" name="pers_sex" class="text" placeholder="性别">
        </p>
        <p>
            <input type="text" name="pers_date" class="text" placeholder="出生日期">
        </p>
        <p>
            <input type="text" name="pers_tel" class="text" placeholder="联系方式">
        </p>
        <p>
            <input type="text" name="pers_site" class="text" placeholder="现住址">
        </p>
        <p>
            <input type="text" name="pers_edu" class="text" placeholder="户籍所在地">
        </p>
        <p>
            <input type="text" name="pers_major" class="text" placeholder="最后学历">
        </p>
        <p>
            <input type="text" name="pers_degree" class="text" placeholder="专业">
        </p>
        <p>
            <input type="text" name="pers_sch" class="text" placeholder="学位">
        </p>
        <p>
            <input type="text" name="username" class="text" placeholder="毕业学校">
        </p>
        <p>
            <input type="text" name="pers_skill" class="text" placeholder="业务技能">
        </p>
        <p>
            <input type="submit" class="btn" value="注册" />
        </p>
    </form>

</body>
</html>