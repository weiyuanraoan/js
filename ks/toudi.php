<?php 
require('inc/pdo.php');
$sql="select * from pers_tab,employ_tab";
// echo $sql;
$rs=$pdo->query($sql);
$result=$rs->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>系统实例</title>
    <link rel="stylesheet" href="css/site.css">
</head>
<body>
    <header>
        <div class="container">
           <?php include('inc/header.html') ?> 
        </div>
    </header>
    <div class="container">
        <aside>
            <?php include('inc/nav1.html') ?>
        </aside>
           <div class="content">
            <form action="do_toudi.php" method="post" class="frm reg" name="f1">
        <h2>投递简历</h2>
        <p>
            <input type="text" name="pers_id" class="text" placeholder="注册ID">
        </p>

        <p>
            <input type="text" name="com_id" class="text" placeholder="公司序号">
        </p>
        <p>
            <input type="text" name="jianjie" class="text" placeholder="个人简介">
        </p>
        <p>
            <button type="submit" class="btn" >一键投递</button>
        </p>
    </div>
        
        </div>
    <footer>
        <p>版权所有@潘智伟</p>
    </footer> 
    </form>
</body>
</html>
