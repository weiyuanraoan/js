<?php 
//pdo.php
try {
    $dsn='mysql:host=localhost;dbname=ksproject';
    $pdo=new PDO($dsn,'root','');
} catch (PDOException $e) {
    echo 'error:'.$e->getMessage();
}
$pdo->exec('set names utf8');
 ?>