<?php
    session_start();
    header('Content-type:text/html;charset=utf-8');
    // var_dump($_POST);
    $username=trim($_POST['username']);
    $username=strtolower($username);
    $password=$_POST['password'];
    // echo $username;
    // echo $password;
    // 服务器端验证用户名
    if (empty($username)) {
        echo '<script>alert("用户名必须输入!");history.back();</script>';
        exit;
    }
    require('inc/pdo.php');
    $sql="select * from user_info where username='$username'";
    // echo $sql;
    // exit;
    $rs=$pdo->query($sql);
    $result=$rs->fetch(PDO::FETCH_ASSOC);
    // var_dump($result);
    if ($result==false) {
        echo '<script>alert("用户不存在!");history.back();</script>';
        exit;
    }else{
        if (md5($password)==$result['password']) {
            $_SESSION['username']=$username;
            // echo $result['username'].',登录成功!';
            header('location:interface.php');
            $login_time=time();
            $login_ip=$_SERVER['REMOTE_ADDR'];
            $id=$result['id'];
            $sql="update user_info set login_time=$login_time,login_ip='$login_ip' where id=$id";
            $pdo->exec($sql);
        }else{
            echo '<script>alert("密码错误!");history.back();</script>';
            exit;
        }
    }
    



 ?>