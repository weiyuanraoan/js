<?php 
require('inc/pdo.php');
$sql="select * from pers_tab";
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
            <h2>用户列表</h2>
            <table class="tab">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>姓名</th>
                        <th>年龄</th>
                        <th>性别</th>
                        <th>出生日期</th>
                        <th>联系方式</th>
                         <th>户籍锁在地</th>
                          <th>最后学历</th>
                           <th>专业</th> 
                           <th>学位</th> 
                           <th>毕业学校</th> 
                           <th>业务技能</th>
                           <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($result as $key => $value) {
                     ?>
                     <tr>
                        <td><?=$value['pers_id']?></td>
                        
                         <td><?=$value['username']?></td>
                         <td><?=$value['pers_age']?></td>
                         <td><?=$value['pers_sex']?></td>
                         <td><?=$value['pers_date']?></td>
                         <td><?=$value['pers_tel']?></td>
                         <td><?=$value['pers_site']?></td>
                         <td><?=$value['pers_edu']?></td>
                         <td><?=$value['pers_major']?></td>
                         <td><?=$value['pers_degree']?></td>
                         <td><?=$value['pers_sch']?></td>
                     <td><?=$value['pers_skill']?>
                    <td> <a href="edit.php?pers_id=<?=$value['pers_id']?>" class="btn">编辑</a> 
                     <a href="del.php?pers_id=<?=$value['pers_id']?>" class="btn">删除</a></td> </tr>
                    
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