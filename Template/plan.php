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
</head>
<body>
        <?php require_once("/home/tongling/public_html/db_info.php");?>

        <!--导航栏-->
        <?php  require_once($header_index);?>
                <br><br><br>
        <div id = "wrapper">
        	<div id = "text">
        <h1>接下来的建站步骤</h1>
        1、将所有网页的组成部分分成多个不同的基本模块，能封装的尽量封装成单个php文件 
         <ul>
                <li><s>头部导航栏</s></li>                            
                <li><s>一些基本的按钮</s></li>
                <li><s>正文内容</s></li>
                <li><s>尾部版权声明</s></li>
                <li><s>ps:把css文件也分开写，归纳到不同的文件夹</s></li>
                <li><s>前端的页面归纳到同一个文件夹</s></li>
                <li><s>修改成两栏的配置</s>
        </ul>
        2、2048 Game 做一点修改<p><br>
        3、连接上数据库，创建数据库的基本表<p><br>
        4、实现博客独立的登陆和注册功能<p><br>
        5、阅读量统计<p><br>
        6、时间发布统计<p><br>
        7、【思考怎样解耦】开发后台管理页面<p><br>
        8、把前后端分开管理<p><br>
        <a href = "/index.php">返回首页</a><p>
       		 </div> 
       		 
                 <div id = "list">
                	今天晚上吃点啥？<p>
               		 马老板又发工资了！2015年阿里奖金大幅提升<p>
                	童凌的官方网站<p>
            		实验室一景<p>
            		2048爆红网络<p>
            		未添加的新闻...<p>
            		未添加的新闻...<p>
                </div>
        </div>
        <!-- 页脚内容 -->
        <?php  require_once($footer_index);?>
        

</body>
</html>