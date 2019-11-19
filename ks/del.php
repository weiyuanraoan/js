<?php
$pers_id=$_GET['pers_id'];
require('inc/pdo.php');
$sql="delete from pers_tab where pers_id=$pers_id";
// echo $sql;
$result=$pdo->exec($sql);
header('location:qiuzhi.php');
 ?>