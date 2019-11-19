<?php 
header('Content-type:text/html;charset=utf8');

require('inc/pdo.php');
$sql="select employ_tab.*,employ_id from employ_tab,com_tab where employ_tab.com_id=com_tab.com_id";
// select user_info.*,dept_name from user_info,dept_info where user_info.dept_id=dept_info.id";
$rs=$pdo->query($sql);
$result=$rs->fetchAll(PDO::FETCH_ASSOC);
 //var_dump($result);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>人才招聘网</title>
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
                        <th>公司序号</th>
                        <th>招聘序号</th>
                        <th>招聘要求</th>
                        <th>招聘人数</th>
                        <th>发布时间</th>
                        <th>其他要求</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($result as $key => $value) {
                     ?>
                     <tr>
                         <td><?=$value['com_id']?></td>
                         <td><?=$value['employ_id']?></td>
                         <td><?=$value['emp_req']?></td>
                         <td><?=$value['emp_num']?></td>
                         <td><?=$value['emp_res']?></td>
                         <td><?=$value['emp_qita']?></td>
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