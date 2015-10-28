<html>
<meta charset = "UTF-8">
<head>
<title>重新发送激活码</title>
<meta http-equiv="Conten-Type" content="text/html; charset=gb2312"></meta>
</head>
<body>
<?php
//获取用户名，激活码，邮件地址
$UserName1=$_POST["UserName"];
$actNum1=$_POST["actNum"];
$Email1=$_POST["Email"];
$Resend=$_POST["Resend"];//检查是否需要重发激活码.在点击重新发送激活码后传递的隐藏数据
//如果用户要求再次发送激活码
include 'config.php';
if ($Resend==1)
{
$query="select * from als_signup where UserName='$UserName1' and Email='$Email1'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
if ($row)
{
 $actNum=$row["actNum"];
 $subject="激活码";
 $message="您的激活码为：$actNum";
 mail($Email1,$subject,$message);
 ?>
 激活码已经重新发送，请登陆邮箱获取激活码。<br>
 点击<a href="activate.php">这里</a>重新激活。
 <?php
}
else
{
 ?>
 用户名或者电子邮件错误。<br>
 点击<a href="activate.php">这里</a>返回。
 <?php
}
}
?>
</body>
</html>