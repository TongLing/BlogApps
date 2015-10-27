<html>
<meta charset = "UTF-8">
<head>
<title>重新发送激活码</title>
<meta http-equiv="Conten-Type" content="text/html"></meta>
</head>
<body>
<?php
//获取用户名，激活码，邮件地址
$UserName1=$HTTP_POST_VARS["UserName"];
$actNum1=$HTTP_POST_VARS["actNum"];
$Email1=$HTTP_POST_VARS["Email"];
$Resend=$HTTP_POST_VARS["Resend"];//检查是否需要重发激活码.在点击重新发送激活码后传递的隐藏数据
//如果用户要求再次发送激活码
include 'config.php';
echo "WRONG";
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
		 echo " 激活码已经重新发送，请登陆邮箱获取激活码。";
	}
	else
	{
		echo "用户名或者电子邮件错误。";
	}
}
?>
</body>
</html>