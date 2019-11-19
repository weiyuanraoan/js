<?php 
$username=$_POST['username'];
$sex=$_POST['sex'];
$dept_id=$_POST['dept_id'];
$id=$_POST['id'];
require('inc/pdo.php');
$sql="select * from user_info where username='$username' and id <>$id";
// echo $sql;
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
// var_dump($result);
if ($result) {
    echo '<script>alert("用户名已存在，请修改!");history.back();</script>';
    exit;
}
$sql="update user_info set username='$username',sex=$sex,dept_id=$dept_id where id=$id";
// echo $sql;
// exit;
$result=$pdo->exec($sql);
header('location:user_list.php');
 ?>
