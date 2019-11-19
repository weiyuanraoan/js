<?php 
header('Content-type:text/html;charset=utf8');
//(1)获取用户提交数据
//var_dump($_POST);
$username=$_POST['username'];
$password=md5($_POST['password']);
$sex=$_POST['sex'];
$dept_id=$_POST['dept_id'];
//(2)验证数据
require('inc/pdo.php');
$sql="select * from user_info where username='$username'";
// echo $sql;
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
// var_dump($result);
if ($result) {
    echo '<script>alert("用户名已存在，请修改!");history.back();</script>';
    exit;
}
//(3)增加数据
$sql="insert into user_info(username,password,sex,dept_id) values('$username','$password',$sex,$dept_id)";
//echo $sql;
$result=$pdo->exec($sql);
if ($result) {
    echo '<script>alert("注册成功!");location.href="login.html";</script>';
    exit;
}
 ?>