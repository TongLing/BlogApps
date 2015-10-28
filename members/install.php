<meta charset ="UTF-8">
<?php
//导入数据库连接文件
include 'config.php';
//自动安装数据库表
$query="create table als_signup (
UserName varchar(20),
Password varchar(20),
Email varchar(20),
actNum varchar(20),
UserLevel tinyint,
SignUpdate varchar(20),
LastLogin varchar(20),
LastLoginFail varchar(20),
NumLoginFail tinyint
)";
$result=mysql_query($query);

if($result==1)
{
 echo "创建表成功.<br>";
}
else
{
 echo "Error while creating table(ErrorNumber".mysql_errno().":\"".mysql_error()."\")<br>";
}
?>