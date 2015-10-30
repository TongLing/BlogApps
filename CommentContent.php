         <?php 
                echo "<hr>";
                $UserName1 = $_SESSION["UserName"];
$Password1 = $_SESSION["Password"];
if (!isset($_SESSION["UserName"]))
{
    echo"<p>您未登陆，只有登陆后才可以发表评论。</p>";
}
else
{
echo '<form action = "Comment_go.php" method = "post">';
echo '<input name ="UserName" id = "UserName" type = "text" value =  '.$UserName1.'  readonly = "true" ><br>';
echo '<textarea name="Text"  rows = "2" cols ="50" id="Text" placeholder = "想说点什么？"></textarea>';
echo '	<input type = "submit"> </form>';
echo "<br><br>";
}
echo "<hr>";
                $sql = "select * from MessageBoard";
$result = mysql_query($sql);
if($result!=true){
echo "查询失败";
 echo "Error while (ErrorNumber".mysql_errno().":\"".mysql_error()."\")<br>";
}
 while($row=mysql_fetch_array($result)){
     if ($row[UserName] =="" || $row[Content] == "") {continue;}
     $tempdate = date("Y-m-d H:i:s ",intval($row[CommentTime])+ 3600*8);
     echo "<div class='comment'>";
     echo "<p><b>$row[UserName] </b>  "."发布于 "."$tempdate<p>";
     echo "<div class='content'>";
     echo "<p>";
     echo htmlspecialchars($row[Content]);
     echo "</p>";
     echo "</div>";
     echo "</div>";
     echo "<hr>";
 }
                ?>