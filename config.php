<meta charset = "UTF-8">
<?php 
//config.php
//该文件为连接数据库文件，连接到mysql并选择数据库
$server = "localhost";
$username = "tl545716730";
$password = "MHXYtl9461";
$database = "TONGLING";
 //如果选择的是别的数据库，也就是说$database不为空
 $conn=mysql_connect($server,$username,$password)
 or die("could not connect mysql");
 mysql_select_db($database,$conn)
 or die("could not open database");
 //echo"config.php:成功连接到数据库<br>";

?>