<meta charset ="UTF-8">
<!DOCTYPE html>
<?php 
	include"config.php";
	session_start(); 

$UserName1 = $_SESSION["UserName"];
$Password1 = $_SESSION["Password"];
if (!isset($_SESSION["UserName"]))
{
    echo"<p>您未登陆，只有登陆后才可以发表评论。</p>";
    exit;
}
else
{
echo '<form action = "Comment_go.php" method = "post">';
echo '<input name ="UserName" id = "UserName" type = "text" value =  '.$UserName1.'  readonly = "true" ><br>';
echo '<textarea name="Text"  rows = "3" cols ="50" id="Text" placeholder = "想说点什么？"></textarea>';
echo '	<input type = "submit"> </form>';
}
?>
