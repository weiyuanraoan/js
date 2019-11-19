<?php 
require('inc/pdo.php');
$sql="select * from employ_tab";
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
            <?php include('inc/nav.html') ?>
        </aside>
           <div class="content">
            <form action="do_fabu.php" method="post" class="frm reg" name="f1">
        <h2>招聘信息</h2>
        <p>
            <input type="text" name="com_id" class="text" placeholder="公司序号">
        </p>
        <p>
            <input type="text" name="emp_req" class="text" placeholder="招聘要求">
        </p>

          <p>
            <input type="text" name="emp_num" class="text" placeholder="招聘人数">
        </p>
          <p>
            <input type="text" name="emp_res" class="text" placeholder="发布时间">
        </p>
          <p>
            <input type="text" name="emp_qita" class="text" placeholder="其他">
        </p>
        <p>
            <button type="submit" class="btn" >注册</button>
        </p>
    </div>
        
        </div>
    <footer>
        <p>版权所有@潘智伟</p>
    </footer> 
    </form>
</body>
</html>
