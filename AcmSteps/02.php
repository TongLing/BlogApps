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
        <title>ACM竞赛的特点 - 童凌的官方网站</title>
</head>
<body>

        <!--导航栏-->
        <?php  require_once($header_index);?>
        
        <br><br><br>
        <div id = "wrapper">
        	<div id = "text">
        		<div align ="center">
        			<a href = "/AcmSteps/01.php">ACM简介<input type = "button" value = "上一篇"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        			<span><a href = "/AcmSteps/03.php"><input type = "button" value = "下一篇">什么是真正的编程能力</a></span>
       		 	</div>

		        <h1>ACM竞赛的特点</h1>
		        <p><br>
		        <h3> 竞赛形式</h3>
		        <p><br>·ACM竞赛使用Online Judge判题。Online Judge系统（简称OJ）是一个在线的判题系统。用户可以在线提交程序多种程序（如C、C++、Pascal）源代码，系统对源代码进行编译和执行，并通过预先设计的测试数据来检验程序源代码的正确性。
		        <p><br>·一个用户提交的程序在Online Judge系统下执行时将受到比较严格的限制，包括运行时间限制，内存使用限制和安全限制等。
		        <p><br>·用户程序执行的结果将被Online Judge系统捕捉并保存，然后再转交给一个裁判程序。该裁判程序或者比较用户程序的输出数据和标准输出样例的差别，或者检验用户程序的输出数据是否满足一定的逻辑条件。
		        <p><br>·Online Judge系统最初使用于ACM-ICPC国际大学生程序设计竞赛和OI信息学奥林匹克竞赛中的自动判题和排名。现广泛应用于世界各地高校学生程序设计的训练、参赛队员的训练和选拔、各种程序设计竞赛以及数据结构和算法的学习和作业的自动提交判断中。
		        <p><br>·南华大学拥有自己的Online Judge，平时的日常训练以及重大比赛均在该系统上举行。
		        <p><br><a href = "http://61.187.179.71:9988" target = "_blank">·点击这里进入南华大学Online Judge>>></a>
		        <p><br>
		        <hr>
		        <h3>提交的返回信息</h3>
		        <p><br>·用户从在线系统提交源代码后，服务器会即时返回信息，包括以下几种：
		        <p><br>·Pending : 系统忙，你的答案在排队等待.
			<br>·Pending Rejudge: 因为数据更新或其他原因，系统将重新判你的答案.
			<br>·Compiling : 正在编译.
			<br>·Running & Judging: 正在运行和判断.		
		     　<br>·Presentation Error : 答案基本正确，但是格式不对。可能你的答案中含有多余的回车或空格。
		     　<br>·Wrong Answer : 答案不对，仅仅通过样例数据的测试并不一定是正确答案，一定还有你没想到的地方.
		     　<br>·Time Limit Exceeded : 运行超出时间限制，检查下是否有死循环，或者应该有更快的计算方法。
		    　 <br>·Memory Limit Exceeded : 超出内存限制，数据可能需要压缩，检查内存是否有泄露。
		     　<br>·Output Limit Exceeded: 输出超过限制，你的输出比正确答案长了两倍.
		        <br>·Runtime Error : 运行时错误，非法的内存访问，数组越界，指针漂移，调用禁用的系统函数。请点击后获得详细输出。
			<br>·Compile Error : 编译错误，请点击后获得编译器的详细输出。
			<br>·Accepted : 程序通过!
		        <p><br>
		        <hr>
		        <h3>ACM题目特点</h3>
		        <p><br>·ACM题目要求遵循严格的输入、输出格式，用户需要按照严格按照题面要求构造输入，输出，不能有任何偏差，否则不能AC。
		        <p><br>·与中学信息学竞赛相比，ACM只有对错之分，没有分数的差别。
		        <p><br>·在中等及以上难度的题目中，要求使用高效简洁的算法。即便算法是正确的，但是如果策略过于复杂，会导致运行超出时间限制。
		        <p><br>·测试数据非常庞大，即便算法是正确的，如果在程序实现时出现误差，也会被严密的测试数据查出，而把程序判定为错误的。
		        <p><br>·强调解决实际问题的能力。赛题与实际应用的联系很紧密，很多试题被出题者描述成一个有趣的故事。因此，读题能力，分析能力相当重要。
		        <p><br>·ACM比赛看重的是算法，对语言的相关性相对较小。
                        <p><br>
		        <div align ="center">
		        	<a href = "/AcmSteps/01.php">ACM简介<input type = "button" value = "上一篇"></a>&nbsp;&nbsp;&nbsp;&nbsp;
		       	        <span><a href = "/AcmSteps/03.php"><input type = "button" value = "下一篇">什么是真正的编程能力</a></span>
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