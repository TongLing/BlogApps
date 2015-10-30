<!doctype html>
<meta charset ="UTF-8">
		<script>
		var Usr;
		var Pwd;
		var PwdCfm;
		var Email;
		//处理用户名
		setInterval(function(event){
 		if(Usr != document.getElementById("UserName").value){
 			Usr = document.getElementById('UserName').value;
			var hint = document.getElementById('hintUsrname');
			if (Usr ==="输入账号" || Usr ==="")
			{
				hint.innerText = "数字和英文字符";
				hint.style.color = "#000000"
				hint.style.fontWeight = "normal";
				flag1 = false;
				return ;
			}
			if (Usr.length < 6)
			{
					hint.innerText = "不能少于6位";
					hint.style.color = "#FF0000"
					hint.style.fontWeight = "bold";
					flag1 = false;
			}
			else if (Usr.length > 16)
			{
					hint.innerText = "不能多于16位";
					hint.style.color = "#FF0000"
					hint.style.fontWeight = "bold";
					flag1 = false;
			}
			else
			{
					hint.innerText = "通过！";
					hint.style.color = "#007700"
					hint.style.fontWeight = "bold";
					flag1 = true;
			}
		}
		},1000);
		function resetAll()
		{
			document.getElementById("UserName").value = "";
			document.getElementById("Password").value = "";
			document.getElementById("ConfirmPassword").value = "";
			document.getElementById("Email").value = "";
		}
		//处理密码
		setInterval(function(event){
 		if(Pwd != document.getElementById("Password").value){
 			Pwd = document.getElementById('Password').value;
			var hint = document.getElementById('hintPwd');
			if (Pwd ==="")
			{
				hint.innerText = "密码6-16位之间";
				hint.style.color = "#000000"
				hint.style.fontWeight = "normal";
				flag2 = false;
				return ;
			}
			if (Pwd.length < 6)
			{
					hint.innerText = "密码不能少于6位";
					hint.style.color = "#FF0000"
					hint.style.fontWeight = "bold";
					flag2 = false;
			}
			else if (Pwd.length > 16)
			{
					hint.innerText = "密码不能多于16位";
					hint.style.color = "#FF0000"
					hint.style.fontWeight = "bold";
					flag2 = false;
			}
			else
			{
					hint.innerText = "通过！";
					hint.style.color = "#007700"
					hint.style.fontWeight = "bold";
					flag2 = true;
			}
		}
		},1000);
		setInterval(function(event){
		if (PwdCfm != document.getElementById('ConfirmPassword').value)
		{
			Pwd = document.getElementById('Password').value;
			PwdCfm = document.getElementById('ConfirmPassword').value;
			var hint = document.getElementById('hintPwdConfirm');
			if (PwdCfm === "")
			{
				hint.innerText = "重复刚才的密码";
				hint.style.color = "#000000";
				hint.style.fontWeight="normal";
				flag3 = false;
				return ;
			}
			else
			{
				if (Pwd == PwdCfm)
				{
					hint.innerText = "通过！";
					hint.style.color = "#007700";
					hint.style.fontWeight = "normal";
					flag3= true;
				}
				else
				{
					hint.innerText = "两次密码输入不一致";
					hint.style.color = "#FF0000";
					hint.style.fontWeight = "bold";
					flag3 = false;
				}
			}
		}
		},1000);
		//处理邮箱
		setInterval(function(event){
 		if(Email != document.getElementById("Email").value){
 			Email = document.getElementById('Email').value;
			var hint = document.getElementById('hintEmail');
			if (Email ==="")
			{
				hint.innerText = "使用有效的地址";
				hint.style.color = "#000000"
				hint.style.fontWeight = "normal";
				flag2 = false;
				return ;
			}
			var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
			if (!reg.test(Email))
			{
					
					hint.innerText = "邮箱格式不正确";
					hint.style.color = "#FF0000"
					hint.style.fontWeight = "bold";
					flag2 = false;
			}
			else
			{
					hint.innerText = "通过！";
					hint.style.color = "#007700";
					hint.style.fontWeight = "normal";
			}

			

		}
		},1000);
		</script>
<html>
	<head>
	<title>注册-童凌的官方网站</title>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <style>
		*{margin:0;padding:0;}
	body{
		background:#EBEBEB;
		font-size:1em;
		color:#111111;
	}
	#wrapper{
		width:400px;
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
	td{
		padding:4px;
	}
		</style>
	</head>
 	
	<body align = "center">
    <div id="wrapper">
		<form  name="form1" method="post" action="add.php">
			
		<table>
            <h2>新用户注册</h2>
                        <div align = "left">
			<tr>
				<td><input name="UserName" type="text" id="UserName" size="20" placeholder = "输入用户名">			<span id = "hintUsrname"> 
				数字和英文字符
			</span></td> 
			</tr>
			<tr>
				<td><input name="Password" type="password" id="Password" size="20" placeholder = "输入密码"><span id ="hintPwd"> 
				密码6-16位之间
			</span></td>
			</tr>
			<tr>
				<td><input name="ConfirmPassword" type="password" id="ConfirmPassword" size="20" placeholder = "确认密码"><span id ="hintPwdConfirm"> 
				重复刚才的密码
			</span></td>
			</tr>
			<tr>
				<td><input name="Email" type="text" id="Email" size="20" placeholder = "Email地址"><span id ="hintEmail"> 
				使用有效的地址
			</span></td>
			</tr>
			</div>
		</table>
		<input name="SignUp" type="submit" id="SignUp" value="注册">
		<input type = "button" name = "reset" value = "重置" onClick = "resetAll()">
		<p>如果您已经有账号，请点击<a href="login.php">这里</a>登陆。</p>
		</form>
        </div>
	</body>
  
</html>