<?php 
require('inc/check_login.php');
require('inc/pdo.php');
$pers_id=$_GET['pers_id'];
// echo $id;
$sql="select * from pers_tab";
$rs=$pdo->query($sql);
$dept=$rs->fetchAll(PDO::FETCH_ASSOC);
// var_dump($dept);

$sql="select * from pers_tab where pers_id=$pers_id";
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
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
            <form action="update.php" method="post" class="frm">
                <p>
                    <label for="username" class="edit-label">姓名</label>
                     <div class="edit-cell">
                        <input type="text" name="username"  class="text" value="<?=$result['username']?>">
                    </div>
                </p>
                <p>
                    <p>
                    <label for="pers_age" class="edit-label">年龄</label>
                     <div class="edit-cell">
                        <input type="text" name="pers_age"  class="text" value="<?=$result['pers_age']?>">
                    </div>
                </p>
                <p>
                    <p>
                    <label for="pers_site" class="edit-label">地址</label>
                     <div class="edit-cell">
                        <input type="text" name="pers_site"  class="text" value="<?=$result['pers_site']?>">
                    </div>
                </p>
                <p>
                    <p>
                    <label for="pers_tel" class="edit-label">电话</label>
                     <div class="edit-cell">
                        <input type="text" name="pers_tel"  class="text" value="<?=$result['pers_tel']?>">
                    </div>
                </p>
                <p>

                   
                <p>
                    <label class="edit-label">&nbsp;</label>
                    <div class="edit-cell">
                        <input type="hidden" name="pers_id" value="<?=$result['pers_id']?>">
                        <button type="submit" class="btn big_btn">修改</button>
                    </div>
                </p>
                
            </form>
        </div>
    </div>
    <footer>
        <p>版权所有@潘智伟</p>
    </footer>
</body>
</html>