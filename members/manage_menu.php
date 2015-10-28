<?php session_start(); ?>
<html>
<meta charset = "UTF-8">
<head>
<title>用户管理</title>
<meta content="text/html" http-equiv="Content-Type">
</head>
<body>
<?php 
include 'config.php';
$UserName1 = $_SESSION["UserName"];
$Password1 = $_SESSION["Password"];
echo"你好，$UserName1<br>您的密码是$Password1<br>";
echo "<a href = '/index.php'>回到首页</a><br>";
?>
<a href="manage/menu_default.php" target="right">我的地盘</a><br>
<a href="manage/manage_menu_1.php" target="right">功能菜单1</a><br>
<a href="manage/manage_menu_2.php" target="right">功能菜单2</a><br>
<a href="manage/manage_menu_3.php" target="right">功能菜单3</a><br>
<a href="manage/manage_menu_4.php" target="right">功能菜单4</a><br>
<a href="manage/manage_menu_5.php" target="right">功能菜单5</a><br>
<a href="manage/change_password.php" target="right">修改密码</a><br>
<a href="manage/delete_user.php" target="right">删除账号</a><br>
<a href="manage/login_off.php" target="_parent">退出登录</a><br>
</body>
</html>
 