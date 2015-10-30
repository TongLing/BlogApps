

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
		</style>
</head>
<body>
<?php session_start();//启动会话
include 'config.php';

//获取用户的登录信息。用户名，密码，是否保存信息
$UserName1=$_POST["UserName"];
$Password1=$_POST["Password"];
$Remember=$_POST["KeepInfo"];
//如果用户点击了保存登录信息，将Remember置为1，否则置为0
if ($Remember=="KeepInfo")
{
 $Remember="1";
}
else
{
 $Remember="0";
}
//查询用户名是否存在
$query="select * from als_signup where UserName='$UserName1'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
if ($row)
{
 //查询用户是否已经激活
 if ($row["actNum"]=="0")
 {
  //判断登录失败次数是否小于等于5次
  if ($row["NumLoginFail"]<=5)
  {
   //判断密码是否正确
   if ($row["Password"]==$Password1)
   {
    //如果密码正确，修改最近登录时间，将登录失败信息清除
    $datetime=date("d-m-Y G:i");
    $query="update als_signup set LastLogin='$datetime' where UserName='$UserName1'";
    $result=mysql_query($query);
    $query="update als_signup set NumLoginFail='0' where UserName='$UserName1'";
    $result=mysql_query($query);
    //创建会话，保存登录信息
    $_SESSION["Password"]=$Password1;
    $_SESSION["UserName"]=$UserName1;

    //发送cookie到客户端，密码被加密
    if ($Remember=="1")
    {
     setcookie("RememberCookieUserName",$UserName1,(time()+604800));
     setcookie("RememberCookiePassword",md5($Password1),(time()+604800));
    }
    //登录成功，页面转到管理页面
    echo'<div id = "wrapper"> ';
    echo "<p>登陆成功</p>";
    echo " <a href = 'manage.php'><p>点击这里</a>进入后台页面</p>";
    echo " <a href = '/index.php'><p>点击这里</a>回到首页</p>";
        echo '</div> ';
   }
   else
   {

       //密码错误，登录失败
       //检查上次登录失败时间是否在5min之内，如果不是，则登录失败次数增加1
      $datetime=date("d-m-Y G:i ",strtotime("-5 minutes"));//获取5分钟以前的时间
      $timenow=date("d-m-Y G:i ");//获取现在的时间
       if($row["LastLoginFail"]<$datetime)//不在5min之内
       {
       //登录失败次数加1
       $query="update als_signup set NumLoginFail=NumLoginFail+1 where UserName='$UserName1'";
       $result=mysql_query($query);
       //修改登录失败时间
       $query="update als_signup set LastLoginFail='$timenow' where UserName='$UserName1'";
       $result=mysql_query($query);
       //返回到登录页面
           echo'<div id = "wrapper"> ';
       echo "<p>密码错误，请重新输入</p>";
       echo "<p><a href='login.php'>点击这里</a>返回到登陆界面</p>";
       echo "<p><a href = '/index.php'>点击这里</a>回到首页<br></p>";
               echo '</div> ';
       }
       else  //在5min之内，只修改登录失败时间
       {
       $query="update als_signup set LastLoginFail='$timenow' where UserName='$UserName1'";
       $result=mysql_query($query);
       //返回到登录页面
       echo'<div id = "wrapper"> ';
       echo "<p>密码错误，请重新输入</p>";
       echo "<p><a href='login.php'>点击这里</a>返回到登陆界面</p>";
       echo "<p><a href = '/index.php'>点击这里</a>回到首页<br></p>";
       echo '</div> ';
       }
   }
  }
  else
  {
  //失败次数超过5次
  //检查时间，如果上次登录失败在半个小时前，则解锁，给用户一次重新登录机会。只有一次机会
  $datetime=date("d-m-Y G:i, ",strtotime("-30 minutes"));
  if($row["LastLoginFail"]<$datetime)  //半个小时以前
  {
  $query="update als_signup set NumLoginFail='5' where UserName='$UserName1'";
  $result=mysql_query($query);
  }
  else
  {
   //半个小时内，则锁定帐户，返回到登录页面，半个小时后解锁
  $timenow=date("d-m-Y G:i ");
  $query="update als_signup set LastLoginFail='$timenow' where UserName='$UserName1'";
  $result=mysql_query($query);
       echo'<div id = "wrapper"> ';
       echo "<p>您的账号目前被锁定，半个小时后自动解锁。请解锁后登录。</p>";
       echo "<p><a href='login.php'>点击这里</a>返回到登陆界面</p>";
       echo "<p><a href = '/index.php'>点击这里</a>回到首页<br></p>";
       echo '</div> ';
  }
  }
 }
 //激活码不为0.用户需要激活
    else
    {
    echo'<div id = "wrapper"> ';
    echo "<p>您的账号没有激活，请激活后登陆。</p>";
    echo "<p><a href='activate.php'>点击这里</a>激活账号</p>";
    echo "<p><a href = '/index.php'>点击这里</a>回到首页</p>";
    echo '</div> ';
    }
}
else
{
    echo'<div id = "wrapper"> ';
echo "<p>您的用户名不正确，请返回重新输入。</p>";
echo "<p><a href='login.php'>点击这里</a>返回到登陆界面</p>";
echo " <p><a href = '/index.php'>点击这里</a>回到首页<br></p>";
    echo '</div> ';
}
?>
</body>