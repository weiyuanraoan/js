<?php
//防跳墙，检测用户是否登录
session_start();
if (!isset($_SESSION['username'])) {
    echo '<script>alert("请重新登录!");location.href="com.html";</script>';
    exit;
}
 ?>