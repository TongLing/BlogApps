<?php 

require'db_info.php'; 
include'config.php';
   session_start();
?>
        
<html>
	<meta http-equiv = "Content-Type" content = "text/html" charset ="UTF-8"/>
	<meta http-equiv = "Content-Language" content="zh-CN"/>
	<meta name = "author" content = "TongLing" /> 
	<meta name = "Copyright" content = "本页版权归TongLing所有.All Rights Reserved."/>
	<meta name = "description" content = ""/>
	<meta name = "Keywords" content = 1,2,3,4,5,6,7,8,9,10>
<head>
	<style type = "text/css">
		@import"/Template/css/style.css";
	</style>
        <title>首页 - 童凌的官方网站</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" media="screen" />
</head>
<body>

        <!--导航栏-->
        <?php  require_once($header_index);?>
     
         <!-- 正文-->
            <br><br><br><br>
            <div id = "wrapper">
            
                <div id = "text">
                        
     			   <h1>嗨！欢迎来到我的官方网站。</h1>
    			    <p>迄今为止已经做了两个功能：第一个是登陆/注册/验证功能，第二个是留言板功能。两个功能都是一般正常的网站必备的东西。</p>
    			    <p><br>原来打算的Acm Steps 也在有条不紊地进行着。看起来一切进展都还很顺利。</p>
    			    <p><br>不过有一点，其实这个网站后台的代码还是挺乱的。毕竟写过的项目经历不是很多，需要继续努力加强。</p>
    			    <p><br>最近从教授那里接到一个制作网页的单子，花在这方面的时间有可能会减少一些。</p>
    			    <p><br>接下来的目标：
    			    <ul>
    			    <li> 1、把网站的后台部分的功能写完整，包括
    			    <ul>
    			           <li>删除账号 </li>
    			           <li>修改密码 </li>
    			           <li>后台编辑文章，发布到前台去！</li>
    			           </ul>
    			    <li>继续更Acm Steps</li>
    			    <li>评论太多了，可能会影响版面的美观。是否需要增加一个分页的功能？</li>
    			    </ul>
    			    
    			    <p><a href = "/Template/test.php">测试页面</a><---该页面供开发人员使用</p>
      			  <p><a href = "/Template/plan.php">建站计划</a></p>
      			   	<?php  require_once("CommentContent.php");  ?>
 	
       
                </div>
                <div id = "list">
                <?php  require_once($list_index);?>
                </div>
                
                
            </div>

       
        <!-- 页脚内容 -->
        <?php  require_once($footer_index); ?>
        

</body>
</html>