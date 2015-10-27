<meta charset = "UTF-8">
<?php
//login.php
//在显示登录界面之前，首先判断是否保存了用户登录信息，如果有，则自动登录
include 'config.php';
session_start();//启动会话
$query="select * from als_signup where UserName='{$_SESSION['UserName']}' and Password='{$_SESSION['Password']}'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
if ($row)
{
 //如果session会话变量用户名与密码匹配，则自动登录，直接跳转到管理页面
header("refresh:1;url=http://localhost/members/manage.php");
exit;
}
?>
<html>
	<head>
		<title>用户登录</title>
	</head>
	<body>
		<form name="form1" method="post" action="login_go.php">
			用户名：<input name="UserName" type="text" size="20" id="UserName"></input><br>
			密&nbsp;&nbsp;码：<input name="Password" type="password" size="20" id="Password"></input><br>
			<input name="KeepInfo" type="checkbox" value="KeepInfo"></input>保存登录信息(7天)<br><br>
			<input name="Submit" type="submit" value="登录"></input>
		</form>
	<a href="forgot.php">忘了密码？</a>
	<a href="SignUp.php">注册新用户</a>
	</body>	
</html>