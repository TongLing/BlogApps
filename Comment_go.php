<meta charset ="UTF-8">

<a href="javascript:history.go(-1);"><font size = "30">向上一页</font></a>
<?php

include 'config.php';

//从Comment表单中获取信息
$UserName1 = $_POST["UserName"];
$Text1 = $_POST["Text"];
$ComTime = $_SERVER['REQUEST_TIME'];
$ID = uniqid(); //不能重复

$sql = "INSERT INTO MessageBoard (ID,UserName,Content,CommentTime) 
					   VALUES ('$ID','$UserName1','$Text1','$ComTime')";
$result = mysql_query($sql);
if($result==true)
{
 echo "插入数据成功！<br>";
}
else
{
 echo "Error while (ErrorNumber".mysql_errno().":\"".mysql_error()."\")<br>";
}


$sql = "select * from MessageBoard";
$result = mysql_query($sql);
if($result!=true){
echo "查询失败";
 echo "Error while (ErrorNumber".mysql_errno().":\"".mysql_error()."\")<br>";
}
 while($row=mysql_fetch_array($result)){
     echo "本条留言的ID为".$row[ID];
     echo "<br>";
     echo "用户名是".$row[UserName];
          echo "<br>";
     echo "留言内容为".$row[Content];
          echo "<br>";
     echo "留言时间:".$row[CommentTime];
     echo "<br>";
          echo "<br>";
 }
 
print_r(mysql_fetch_array($result));

?>
<script>
window.location.href="/index.php";
</script>