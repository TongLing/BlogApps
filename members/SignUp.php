<?php //SignUp.php 

?>
<html>
	<head>
	<title>注册 - 童凌的官方网站</title>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	</head>

	<body align = "center">
		<form  name="form1" method="post" action="add.php">
			<h1>新用户注册</h1><br>
				<table align = center >
			<tr>
				<td><input name="UserName" type="text" id="UserName" size="20" placeholder = "输入用户名"></input></td>
			</tr>
			<tr>
				<td><input name="Password" type="password" id="Password" size="20" placeholder = "输入密码"></input></td>
			</tr>
			<tr>
				<td><input name="ConfirmPassword" type="password" id="ConfirmPassword" size="20" placeholder = "确认密码"></input></td>
			</tr>
			<tr>
				<td><input name="Email" type="text" id="Email" size="20" placeholder = "Email地址"></input></td>
			</tr>
		</table>
		<input name="SignUp" type="submit" id="SignUp" value="注册"></input><br>

		如果您已经有账号，请点击<a href="login.php">这里</a>登陆。
		</form>
	</body>
</html>