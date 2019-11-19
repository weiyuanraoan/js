<?php 
header('Content-type:text/html;charset=utf8');
$username=$_POST['username'];
$pers_age=$_POST['pers_age'];
$pers_site=$_POST['pers_site'];
$pers_tel=$_POST['pers_tel'];
require('inc/pdo.php');
$sql="select * from pers_tab where username='$username'";
// echo $sql;
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
// var_dump($result);
if ($result) {
    echo '<script>alert("用户名已存在，请修改!");history.back();</script>';
    exit;
}
$sql="update pers_tab set username='$username',pers_age='$pers_age',pers_site='$pers_site',pers_tel='$pers_tel'";
// echo $sql;
// exit;
$result=$pdo->exec($sql);
header('location:qiuzhi.php');
 ?>
