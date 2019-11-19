<?php 
require('inc/check_login.php');
require('inc/pdo.php');
$id=$_GET['id'];
// echo $id;
$sql="select * from dept_info";
$rs=$pdo->query($sql);
$dept=$rs->fetchAll(PDO::FETCH_ASSOC);
// var_dump($dept);

$sql="select * from user_info where id=$id";
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
                    <label for="username" class="edit-label">用户名称</label>
                     <div class="edit-cell">
                        <input type="text" name="username" id="username" class="text" value="<?=$result['username']?>">
                    </div>
                </p>
                <p>
                    <label class="edit-label">性别</label>
                    <div class="edit-cell radio">
                        <label>
                            <input type="radio" name="sex" value="1" <?=$result['sex']==1?'checked':''?>>男
                        </label>
                        <label>
                            <input type="radio" name="sex" value="0" <?=$result['sex']==0?'checked':''?>>女
                        </label>
                    </div>
                </p>
                
                <p>
                    <label for="dept" class="edit-label">学院</label>
                    <div class="edit-cell">
                        <select name="dept_id" class="dept" id="dept">
                            <?php 
                            foreach ($dept as $key => $value) {
                             ?>
                            <option value="<?=$value['id']?>" <?=$result['dept_id']==$value['id']?'selected':''?>><?=$value['dept_name']?></option>
                            <?php
                            }
                            ?>    
                        </select>
                    </div>
                </p>
                <p>
                    <label class="edit-label">&nbsp;</label>
                    <div class="edit-cell">
                        <input type="hidden" name="id" value="<?=$result['id']?>">
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