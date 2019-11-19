<?php 
header('Content-type:text/html;charset=utf8');
//(1)获取用户提交数据
var_dump($_POST);
$username=$_POST['username'];
$password=md5($_POST['password']);
$pers_age=$_POST['pers_age'];
$pers_sex=$_POST['pers_sex'];
$pers_date=$_POST['pers_date'];
$pers_tel=$_POST['pers_tel'];
$pers_site=$_POST['pers_site'];
$pers_edu=$_POST['pers_edu'];
$pers_major=$_POST['pers_major'];
$pers_degree=$_POST['pers_degree'];
$pers_sch=$_POST['pers_sch'];
$pers_skill=$_POST['pers_skill'];


//(2)验证数据
require('inc/pdo.php');
$sql="select * from pers_tab where username='$username'";
// echo $sql;
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
var_dump($result);
// if ($result) {
//     echo '<script>alert("用户名已存在，请修改!");history.back();</script>';
//     exit;
// }
// //(3)增加数据
// $sql="insert into pers_tab(username,password,pers_age,pers_sex,pers_date,pers_tel,pers_site,pers_edu,pers_major,pers_degree,pers_sch,pers_skill) values('$username','$password','$pers_age','$pers_sex','$pers_date','$pers_tel','$pers_site','$pers_edu','$pers_major','$pers_degree','$pers_sch','$pers_skill')";
// //echo $sql;
// $result=$pdo->exec($sql);
// if ($result) {
//     echo '<script>alert("注册成功!");location.href="pers.html";</script>';
//     exit;
// }
 ?>