<?php 
require('inc/check_login.php');
require('inc/pdo.php');
$sql="select user_info.*,dept_name from user_info,dept_info where user_info.dept_id=dept_info.id";
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
            <h2>用户列表</h2>
            <table class="tab">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>用户名</th>
                        <th>性别</th>
                        <th>学院</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($result as $key => $value) {
                     ?>
                     <tr>
                         <td><?=$value['id']?></td>
                         <td><?=$value['username']?></td>
                         <td><?=$value['sex']==1?'男':'女'?></td>
                         <td><?=$value['dept_name']?></td>
                         <td>
                            <a href="edit.php?id=<?=$value['id']?>" class="btn">编辑</a> 
                            <a href="del.php?id=<?=$value['id']?>" class="btn">删除</a>
                        </td>
                     </tr>
                    <?php
                    }
                    ?>    
                </tbody>
            </table>
        </div>
    </div>
    <footer>
        <p>版权所有@潘智伟</p>
    </footer>
</body>
</html>