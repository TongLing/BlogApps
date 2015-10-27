<?php
include 'config.php';
session_start();//启动会话
//获取用户的登录信息。用户名，密码，是否保存信息
$UserName1=$HTTP_POST_VARS["UserName"];
$Password1=$HTTP_POST_VARS["Password"];
$Remember=$HTTP_POST_VARS["KeepInfo"];
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
    session_unset();//删除会话
    session_destroy();
    session_register("Password");//创建会话变量，保存密码
    $HTTP_SESSION_VARS["Password"]=$Password1;
    session_register("UserName");//保存用户名
    $HTTP_SESSION_VARS["UserName"]=$UserName1;
    //发送cookie到客户端，密码被加密
    if ($Remember=="1")
    {
     setcookie("RememberCookieUserName",$UserName1,(time()+604800));
     setcookie("RememberCookiePassword",md5($Password1),(time()+604800));
    }
    //登录成功，页面转到管理页面
    header("refresh:1;url=http://localhost/members/manage.php");
       exit;
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
       header("refresh:5;url=http://localhost/members/login.php");
       echo "密码错误，请重新输入<br>5秒后自动返回";
       }
       else  //在5min之内，只修改登录失败时间
       {
       $query="update als_signup set LastLoginFail='$timenow' where UserName='$UserName1'";
       $result=mysql_query($query);
       //返回到登录页面
       header("refresh:5;url=http://localhost/members/login.php");
       echo "密码错误，请重新输入<br>5秒后自动返回";
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
  header("refresh:5;url=http://localhost/members/login.php");
  echo "您的账号目前被锁定，半个小时后自动解锁。请解锁后登录。";
  echo "<br>5秒后自动返回";
  exit;
  }
  }
 }
 //激活码不为0.用户需要激活
    else
    {
    header("refresh:5;url=http://localhost/members/activate.php");
    echo "您的账号没有激活，请激活后登陆。<br>5秒后自动跳转到激活页面。";
    }
}
else
{
header("refresh:5;url=http://localhost/members/login.php");
echo "您的用户名不正确，请返回重新输入。<br>5秒后自动返回。";
}
?>