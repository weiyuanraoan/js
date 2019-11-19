<?php 
header('Content-type:text/html;charset=utf8');
//(1)获取用户提交数据
//var_dump($_POST);
$username=$_POST['username'];
$password=md5($_POST['password']);
$com_tel=$_POST['com_tel'];
$com_site=$_POST['com_site'];
$com_intro=$_POST['com_intro'];
$com_business=$_POST['com_business'];
//(2)验证数据
require('inc/pdo.php');
$sql="select * from com_tab where username='$username'";
// echo $sql;
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
var_dump($result);
if ($result) {
    echo '<script>alert("公司名已存在，请修改!");history.back();</script>';
    exit;
}
//(3)增加数据
$sql="insert into com_tab(username,password,com_tel,com_site,com_intro,com_business) values('$username','$password','$com_tel','$com_site','$com_intro','$com_business')";
//echo $sql;
$result=$pdo->exec($sql);
if ($result) {
    echo '<script>alert("注册成功!");location.href="com.html";</script>';
    exit;
}
 ?>