<html>
<meta charset ="UTF-8">
<head>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <style>
		*{margin:0;padding:0;}
	body{
		background:#EBEBEB;
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
	
	table,h2{
		margin:0 auto;
	}
	input[type="submit"]{
		padding:0 10px 0 10px;
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
		section{
		margin:0 0 10px 0;
	}
	section.denglu{
		font-size:1.2em;
	}
		.buttom{
		position:absolute;
	}
		</style>
		
<title>密码找回</title>
</head>
<body>
<div id = "wrapper">
<h2><b>找回密码</b></h2>
<span><a href="login.php">返回登录页面</a><br></span>
<form name="form1" method="post" action="forgot_go.php">
<section class = "denglu">
用户名:<input name="UserName" type="text" id="UserName" size="20"></input><br>
</section>
<section class = "denglu">
邮&nbsp;&nbsp;&nbsp;箱:<input name="Email" type="text" id="Email" size="20"></input><br>
</section>

        <section class="buttom">
    		<input name="SendPassword" type="submit" value="发送密码" size="20">
   		</section>

</div>
</form>
</body>
</html>