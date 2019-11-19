<?php 
header('Content-type:text/html;charset=utf8');
//(1)获取用户提交数据
//var_dump($_POST);
$pers_id=$_POST['pers_id'];
$com_id=$_POST['com_id'];
$jianjie=$_POST['jianjie'];
require('inc/pdo.php');
$sql="select * from employ_tab where com_id='$com_id'";
// echo $sql;
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
var_dump($result);
//(3)增加数据
$sql="insert into employ_tab(pers_id,com_id,jianjie) values('$pers_id','$com_id','$jianjie')";
//echo $sql;
$result=$pdo->exec($sql);
if ($result) {
    echo '<script>alert("投递成功!");location.href="interface1.php";</script>';
    exit;
}
 ?>