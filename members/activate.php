<html>
<meta charset = "UTF-8">
<head>
<title>注册账号激活</title>
<meta http-equiv="Conten-Type" content="text/html"></meta>
</head>
<body>
<h1>注册账号激活</h1>
<form name="form1" method="post" action="active_go.php" >
谢谢注册，激活码已经被发送到您的邮箱！<br>
用户名：<input name="UserName" type="text" id="UserName" size="20"></input><br>
激活码：<input name="actNum" type="text" id="actNum" size="20"></input><br>
<input name="Submit" type="submit" value="激活"></input><br>
</form>
<br><br><br>
<form name="form2" method="post" action="Resend_actNum.php">
如果没有收到邮件，可以再次发送邮件：<br>
用户名：<input name="UserName" type="text" id="UserName" size="20"></input><br>
邮 &nbsp;箱：<input name="Email" type="text" id="Email" size="20"></input>
<input name="Resend" type="hidden" id="Resend" value="1"></input><br>
<input name="Submit" type="submit" value="发送"></input>
</form>
</body>
</html>