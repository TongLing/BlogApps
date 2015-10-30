<html>
<meta charset ="UTF-8">
<head>
<title>激活</title>
<meta http-equiv="Conten-Type" content="text/html"></meta>
</head>
<body>
<?php
//获取用户名，激活码
$UserName1=$_POST["UserName"];
$actNum1=trim($_POST["actNum"]," ");


include 'config.php';

//检查用户名和激活码是否正确
$query="select * from als_signup where UserName='$UserName1' and actNum='$actNum1'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
if ($row)
{
 //如果用户名和激活码正确，成功激活，将数据库表中激活码设为0
 $query="update als_signup set actNum='0' where UserName='$UserName1'";
 $result=mysql_query($query);
 ?>
 您已经成功激活账号。<br>
 请点击<a href="login.php">这里</a>登陆<br>
 点击<a href="/index.php">这里</a>回到首页
 <?php
}
else
{
 echo "用户名或者激活码错误，请返回重新输入<br>";
 ?>
 <a href="activate.php">返回</a>
 <?php
}
?>
</body>
</html>