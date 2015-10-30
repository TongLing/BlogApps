<?php

require_once("config.php");

$SQL = "DROP TABLE MessageBoard";
$result = mysql_query($SQL);
if ($result == 1)
{
echo"删除表成功";
}
else
{
 echo "Error while DLETE table(ErrorNumber".mysql_errno().":\"".mysql_error()."\")<br>";
}

//创建留言板表
$SQL = "CREATE TABLE MessageBoard
(
ID varchar(20),
UserName varchar(20),
Content varchar(400),
CommentTime varchar(20)
)
";
$result = mysql_query($SQL);
if($result==1)
{
 echo "创建表成功.<br>";
}
else
{
 echo "Error while creating table(ErrorNumber".mysql_errno().":\"".mysql_error()."\")<br>";
}

?>