<?php require'db_info.php'; ?>
        
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
                <?php  require_once($article_index);?>
                </div>
                <div id = "list">
                <?php  require_once($list_index);?>
                </div>
            </div>

       
        <!-- 页脚内容 -->
        <?php  require_once($footer_index); ?>
        

</body>
</html>