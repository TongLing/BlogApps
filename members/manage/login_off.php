<meta charset ="UTF-8">
<?php
//启动会话
session_start();
//将客户端cookie设置为过去时间，即过期
setcookie("RememberCookieUserName","UserName",time()-60);
setcookie("RememberCookiePassword","Password",time()-60);
//删除会话
session_unset();
session_destroy();
//回到登录界面
header("refresh:1;url=http://localhost/members/login.php");
echo"退出成功！<br>";
echo"<a href='/index.php'>点击这里</a>回到首页<br>";
echo"<a href='/members/login.php'>点击这里</a>重新登陆<br>";
?>