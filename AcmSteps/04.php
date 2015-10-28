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
        <title>C语言 - 童凌的官方网站</title>
</head>
<body>

        <!--导航栏-->
        <?php  require_once($header_index);?>
        
        <br><br><br>
        <div id = "wrapper">
        	<div id = "text">
        		<div align ="center">
        			<a href = "/AcmSteps/03.php">什么是真正的编程能力<input type = "button" value = "上一篇"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        			<span><a href = "/AcmSteps/05.php"><input type = "button" value = "下一篇">正在规划中</a></span>
       		 	</div>
       		 	
       		 	<h1>C语言</h1>
       		 	<h3>为什么选择C语言作为入门语言</h3>
       		 	<p><br>对于大部分程序员，C语言是学习编程的第一门语言，很少有不了解C的程序员。
			<p><br>也许你将来的工作或学习不会使用C语言，但是它能让你了解编程相关的概念，带你走进编程的大门，以后学习其他语言，会触类旁通，很快上手，7 天了解一门新语言不是神话。
			<p><br>C语言概念少，词汇少，包含了基本的编程元素，后来的很多语言（C++、Java等）都参考了C语言，说C语言是现代编程语言的开山鼻祖毫不夸张，它改变了编程世界。
			<p><br>正是由于C语言的简单，对初学者来说，学习成本小，时间短，结合本教程，能够快速掌握编程技术。
			<p><br>对于初学者，学习C语言还可以顺便了解很多计算机的运行原理，为后面的学习夯实基础。
			<p><br>C语言不但运行效率高（比C++、Java都高），而且应用广泛，可以用来开发桌面软件、硬件驱动、操作系统、单片机等，从微波炉到手机，从汽车到智能电视，都有C语言的影子。
			<p><br>在世界编程语言排行榜中，C语言大部分情况下排名第一（偶尔会被Java夺得宝座）。
       		 	<p><br>
       		 	<hr>
       		 	<h3>C语言与ACM</h3>
       		 	<p><br>你可能从别人那里听说过，XX语言功能很强大，XX语言拥有其他语言没有功能……
       		 	<p><br>在我看来，其实任何编程语言都一样，不管是你的学长学姐告诉你简单，还是你自己认为简单，其实都是错误的观念，不要被这些观念误导。
			<p><br>你可以认为X语言比Y语言在软件开发方面更加优秀，或者M语言比N语言在数据挖掘方面更加方便，但是绝不能认为哪一种语言更加简单。每一种编程语言都有自己的应用领域，要学习合适的语言，而不是“简单”的语言。
       		 	<p><br>由于某些原因，不同的编程语言在计算机中，计算速度的快慢有所不同。前面我们提到，在ACM的世界中要求快速，简洁的算法，所以某些编程语言，比如Java，并不是非常适合作为ACM竞赛使用的语言。当然，Java语言也有擅长的地方，我们以后会提到。
       		 	<p><br>C语言运行效率极高，代码简洁，容易编写，这些优势对ACM竞赛提供了强有力的帮助，因此，C语言既是ACM竞赛所使用的官方语言之一，也是计算机专业学习的首选语言。
       		 	
			<p><br>
		        <div align ="center">
		        	<a href = "/AcmSteps/03.php">什么是真正的编程能力<input type = "button" value = "上一篇"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        			<span><a href = "/AcmSteps/05.php"><input type = "button" value = "下一篇">正在规划中</a></span>
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