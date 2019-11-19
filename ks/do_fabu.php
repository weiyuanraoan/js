<?php 
header('Content-type:text/html;charset=utf8');
//(1)获取用户提交数据
//var_dump($_POST);
$com_id=$_POST['com_id'];
$emp_req=$_POST['emp_req'];
$emp_num=$_POST['emp_num'];
$emp_res=$_POST['emp_res'];
$emp_qita=$_POST['emp_qita'];
//(2)验证数据
require('inc/pdo.php');
$sql="select * from employ_tab where emp_res='$emp_res'";
// echo $sql;
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
var_dump($result);


// echo $sql;
if ($result) {
    echo '<script>alert("招聘信息已存在，请修改!");history.back();</script>';
    exit;
}
//(3)增加数据
$sql="insert into employ_tab(com_id,emp_num,emp_qita,emp_req,emp_res) values('$com_id','$emp_num','$emp_qita','$emp_req','$emp_res')";
//echo $sql;
$result=$pdo->exec($sql);
if ($result) {
    echo '<script>alert("发布成功!");location.href="interface.php";</script>';
    exit;
}
 ?>