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
        <title>与编程相关的硬件 - 童凌的官方网站</title>
</head>
<body>

        <!--导航栏-->
        <?php  require_once($header_index);?>
        
        <br><br><br>
        <div id = "wrapper">
        	<div id = "text">
        		<div align ="center">
        			<a href = "/AcmSteps/04.php">C语言<input type = "button" value = "上一篇"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        			<span><a href = "/AcmSteps/06.php"><input type = "button" value = "下一篇">载入内存，让程序运行起来</a></span>
       		 	</div>
       		 	
       		 	<h1>与编程相关的硬件</h1>
       		 	<h3>主板</h3>
       		 	<p><br>不管是台式机还是笔记本，它们内部都有一块电路板，上面密密麻麻地布满了大小不一的电子器件，包括CPU、内存条、网卡、各种插槽和接口等，这就是“主板”，如下图所示。
       		 	<p><br>ps:这张图片主要让你了解主板的构造，你不必理解图片中各个晦涩的名词。
       		 	<p><br>
			<img src = "img/05-01.jpg" width = "80%"></img>
			<p align = "center">图1：主板</align></p>
			<hr>
			<h3>CPU</h3>
			<p><br>CPU (Central Processing Unit) 就是“中央处理器”，是计算机的大脑，负责计算、思考、处理数据、控制其他设备等，没有CPU，计算机就无从谈起，CPU的速度直接决定了电脑的运行速度。如下图所示：
			<img src = "img/05-02.jpg" width = "80%"></img>
			<p align = "center">图2：CPU</align></p>
			<p><br>目前市场上常见的应用于台式机和笔记本的CPU有 Intel(英特尔) 和 AMD(超微半导体公司)，Intel 性能好一点，占据了大部分份额。
			<p><br>CPU有很多针脚，直接插在主板上，如下图所示：
			<img src = "img/05-03.jpg" width = "80%"></img>
			<p align = "center">图3：CPU插槽</align></p>
			<hr>
			<h3>内存</h3>
			<p><br>内存就是下面的长方形“卡片”，也叫内存条。
			<img src = "img/05-04.jpg" width = "80%"></img>
			<p align = "center">图4：内存</align></p>
       		 	<p><br>我们常说电脑有几个G的内存，就是指它的大小，市面上常见的有2G、4G、8G等。
       		 	<p><br>内存条插在主板上的特定插槽内，如下所示是台式机的内存插槽：
       		 	<img src = "img/05-05.jpg" width = "80%"></img>
			<p align = "center">图5：台式机内存插槽</align></p>
       		 	<p><br>不过笔记本为了节省空间，一般将内存条平放，如下所示：
       		 	<img src = "img/05-06.jpg" width = "80%"></img>
			<p align = "center">图6：笔记本内存插槽</align></p>
			<p><br>主板上一般有多个内存插槽，可以插多个内存条，电脑内存大小是所有内存条大小之和。内存条也被称为主存。
			<hr>
			<h3>硬盘</h3>
       		 	<p><br>硬盘是用来保存数据的。打开一个文件，编辑完成后，Ctrl+S 就保存到了硬盘，断电不会丢失。硬盘分为机械硬盘(HDD)和固态硬盘(SSD)。机械硬盘就像VCD或DVD，由一个精密电机带动光盘快速转动来让探头读取和写入数据。如下图所示：
       		 	<img src = "img/05-07.jpg" width = "80%"></img>
			<p align = "center">图7：机械硬盘</align></p>
			
       		 	<p><br>固态硬盘就像手机内存卡或U盘，内部有上亿个电子元器件，非常细小，达到纳米级别，通过电路来读取和写入数据。如下图所示：
		 	<img src = "img/05-08.jpg" width = "80%"></img>
			<p align = "center">图8：固态硬盘</align></p>
			<p><br>协调。CPU、内存、硬盘等部件不能各自为战，它们通过主板连接在一起，由CPU控制，协调工作。
		        <div align ="center">
        			<a href = "/AcmSteps/04.php">C语言<input type = "button" value = "上一篇"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        			<span><a href = "/AcmSteps/06.php"><input type = "button" value = "下一篇">载入内存，让程序运行起来</a></span>
      		        </div>
        	</div>
        	<div id = "list">
                <?php require_once("/home/tongling/public_html/AcmSteps/acmList.php"); ?>
                </div>
        </div>
        
        <!-- 页脚内容 -->
        <?php  require_once($footer_index);?>

</body>
</html>