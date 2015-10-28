<?php require'/home/tongling/public_html/db_info.php'; ?>

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
        <title>AcmSteps - 童凌的官方网站</title>
</head>
<body>
        

        <!--导航栏-->
        <?php  require_once($header_index);?>
        <br><br><br><br>
        <div id = "wrapper">
        	<div id = "text">
     
		        <h1>欢迎学习Acm Steps！</h1>
		        <p><br>
		        ACM是大学生程序设计竞赛的简称，众多优秀的学子在比赛中训练自己的能力，取得荣誉。
		        <p><br>
		        ACM不仅提高你的编程能力，更考验你的英语水平，自主学习能力，创新能力，以及团队协作的能力。
		        <p><br>
		        我们会从ACM的介绍开始，一步步走进ACM的世界！
		        <p><br>
		        你会喜欢它的！
		        <p><br>
		        现在就开始吧！
		        <p><br>
		        <a href = "/AcmSteps/01.php"><img src = "img/l.png"/>
		        </a>
               	</div>
                <div id = "list">
                <?php require_once("/home/tongling/public_html/AcmSteps/acmList.php"); ?>
                </div>                      
        </div>
        <!-- 页脚内容 -->
        <?php  require_once($footer_index);?>

</body>
</html>