<html>
	
<head>
    <title>退出账号</title>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <style>
	*{margin:0;padding:0;}
	body{
		background:#E9E9E9;
		font-size:1em;
		color:#111111;
	}
	#wrapper{
		width:300px;
		margin:150px auto 0;
		background:#FFFFFF;
		border-radius:8px;
		position:relative;
		padding:30px;
		box-shadow:0px 6px 6px -6px;
	}
	section{
		margin:0 0 10px 0;
	}
	section.denglu{
		font-size:1.2em;
	}
	section.save{
		font-size:0.8em;
		color:#7F7F7F;
	}
	p{
		font-size:1em;
	}
	a{
		text-decoration:none;
		font-size:0.9em;
		color:#39B1A4;
	}
	a:hover{
		text-decoration:none;
		font-size:0.9em;
		color:#000000;
	}
	input::fouce{
		border-color:#39B1A4;
	}
	.buttom{
		position:absolute;
	}
	input[type="submit"]{
		padding:5px;
		margin:0 0 0 180px;
	}
	input[name="Password"]{
		padding:0 5px;
	}
	</style>
</head>
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
echo '<div id = "wrapper">';
echo"退出成功！<br>";
echo"<p><a href='/index.php'>点击这里</a>回到首页</p>";
echo"<p><a href='/members/login.php'>点击这里</a>重新登陆</p>";
echo '</div>';
?>