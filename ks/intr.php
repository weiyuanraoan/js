<?php 
header('Content-type:text/html;charset=utf8');

require('inc/pdo.php');
$sql="select com_id,username,com_tel,com_site,com_intro,com_business from com_tab";
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
                        <th>企业名</th>
                        <th>企业电话</th>
                        <th>企业地址</th>
                        <th>企业介绍</th>
                        <th>经营行业</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($result as $key => $value) {
                     ?>
                     <tr>
                         <td><?=$value['com_id']?></td>
                         <td><?=$value['username']?></td>
                         <td><?=$value['com_tel']?></td>
                         <td><?=$value['com_site']?></td>
                         <td><?=$value['com_intro']?></td>
                        <td><?=$value['com_business']?></td>
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