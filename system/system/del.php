<?php
require('inc/check_login.php');
$id=$_GET['id'];
require('inc/pdo.php');
$sql="delete from user_info where id=$id";
// echo $sql;
$result=$pdo->exec($sql);
header('location:user_list.php');
 ?>