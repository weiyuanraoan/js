function check(){
            console.log('ok');
            var uname,pwd;
            uname=f1.username.value;
            pwd=f1.password.value;
            console.log(uname,pwd);
            if (uname.length==0) {
                alert('用户名不能为空');
                f1.username.focus();
                return;
            }
            if (pwd.length==0) {
                alert('密码不能为空');
                f1.password.focus();
                return;
            }
            f1.submit();
        }