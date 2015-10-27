<meta charset ="UTF-8">
<?php
//获取用户名，邮箱
$UserName1=$HTTP_POST_VARS["UserName"];
$Email1=$HTTP_POST_VARS["Email"];
include 'config.php';
//查询用户名和邮箱是否存在并且匹配
$query="select * from als_signup where UserName='$UserName1' and Email='$Email1'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
if ($row)
{
 //查询成功，则发送密码到用户注册邮箱
 $to=$Email1;
 $subject="密码";
    $message="您的密码为". $row["Password"];
    if (mail($to,$subject,$message))
    {
     header("refresh:5;url=http://localhost/members/login.php");
     echo "密码已经发送到您的邮箱，请查收<br>5秒后自动跳转到登录页面";
     exit;
    }
}
else
{
 header("refresh:5;url=http://localhost/members/forgot.php");
 echo "用户名或者邮箱错误，请确认邮箱为注册用户时的邮箱<br>5秒后自动返回";
 exit;
}
?>