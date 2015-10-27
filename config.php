<?php 
//config.php
//该文件为连接数据库文件，连接到mysql并选择数据库
$server = "localhost";
$username = "tl545716730";
$password = "MHXYtl9461";
$database = "TONGLING";
if($database=="")
{
 $query="use members";
 if(mysql_query($query)==null)
 {
  $query="create database members";
  if(mysql_query($query)==1)
  {
   //创建数据库成功，开始连接数据库
   $database="members";
   $conn=mysql_connect($server,$username,$password)
   or die("could not connect mysql");
   mysql_select_db($database,$conn)
   or die("could not open database");
    //echo"Successfully1";
  }
  else
  {
   echo "Error while creating database (Error".mysql_errno().":\"".mysql_error()."\")<br>";//创建数据库出错
  }
 }
 else
 {
  //如果数据库中存在members数据库
  $database="members";
  $conn=mysql_connect($server,$username,$password)
  or die("could not connect mysql");
  mysql_select_db($database,$conn)
  or die("could not open database");
   //echo"Successfully2";
 }
}
else
{
 //如果选择的是别的数据库，也就是说$database不为空
 $conn=mysql_connect($server,$username,$password)
 or die("could not connect mysql");
 mysql_select_db($database,$conn)
 or die("could not open database");
 //echo"Successfully3";
}


?>