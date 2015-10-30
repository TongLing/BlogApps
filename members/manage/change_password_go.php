<?php
session_start();
//取出修改密码的数据，原始密码，新密码，确认的新密码
$OldPassword1=$_POST["OldPassword"];
$NewPassword1=$_POST["NewPassword"];
$NewPasswordAgain=$_POST["NewPasswordAgain"];
//导入数据库连接文件
include '../config.php'; //表示上一级目录
//判断原始密码是否为空，两次输入新密码是否一致
if ($OldPassword1!="" && $NewPassword1==$NewPasswordAgain)
{
//修改表中的密码，注意用到session变量用户名和密码同时判断查询
$query="select * from als_signup where UserName='{$_SESSION['UserName']}' and Password='$OldPassword1'";
 //必须要在数组前加上{}，不然无法解析而报错。加上{}主要让语句识别里面是动态的数组
$result=mysql_query($query);
$row=mysql_fetch_array($result);
if ($row)
{
//修改密码，同时修改session会话变量的密码
$query="update als_signup set Password='$NewPassword1' where UserName='{$_SESSION['UserName']}'";
$result=mysql_query($query);
$_SESSION["Password"]=$NewPassword1;
//修改成功，跳转回到默认管理页面
echo "密码修改成功！";
}
else
{
//原始密码输入错误，导致数据库表查询失败
//返回修改密码页面，重新输入
echo "原始密码输入错误<br>";
echo "<a href = '/members/manage/change_password.php'>重新修改密码</a>";
}
}
else
{
if ($OldPassword1=="")//如果原始密码为空
{
//返回修改密码页面，重新输入
echo "原始密码不能为空<br>";
echo "<a href = '/members/manage/change_password.php'>重新修改密码</a>";
}
else //如果新密码两次输入不一致
{
//返回修改密码页面，重新输入

echo "新密码两次输入不一致，请重新输入";
echo "<a href = '/members/manage/change_password.php'>重新修改密码</a>";
}
}
?>