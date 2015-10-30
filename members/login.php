<html>
	
<head>
    <title>用户登录</title>
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
    <link href="decice.css" rel="stylesheet" type="text/css">
</head>
<?php 
session_start();//启动会话
//login.php
//在显示登录界面之前，首先判断是否保存了用户登录信息，如果有，则自动登录
include 'config.php';

$query="select * from als_signup where UserName='{$_SESSION['UserName']}' and Password='{$_SESSION['Password']}'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);



if ($row)
{
echo '<div id="wrapper">';
echo"已经登陆过！<br>";
 //如果session会话变量用户名与密码匹配，则自动登录，直接跳转到管理页面
echo "<p><a href = 'manage.php'>点击这里</a>进入后台</p>";
echo "<p><a href = '/index.php'>点击这里</a>回到首页</p>";
echo "</div>";
exit;
}
?>

<body>
<div id="wrapper">
    <form name="form1" method="post" action="login_go.php">
        <section class="denglu">
            <label for="UserName">用户名</label>
            <input name="UserName" type="text" size="20" id="UserName">
        </section>  
        
        <section class="denglu">  
            <label for="password">密&nbsp;   码</label>
            <input name="Password" type="password" size="20" id="Password">
   		 </section>
         
         <section class="save">
            <input name="KeepInfo" type="checkbox" value="KeepInfo">
            <label for="KeepInfo">保留登陆信息（7天）</label>
    	</section>
    	    <p><a href="forgot.php">忘了密码？</a></p>
    <p><a href="SignUp.php">注册新用户</a></p>
        
        <section class="buttom">
    		<input name="Submit" type="submit" value="登 录"></input>
   		</section>
    </form>

</div>
</body>	
</html>