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
        			<a href = "/AcmSteps/02.php">ACM竞赛的特点<input type = "button" value = "上一篇"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        			<span><a href = "/AcmSteps/04.php"><input type = "button" value = "下一篇">正在规划中</a></span>
       		 	</div>
                        <h1>什么是真正的编程能力</h1>
                        <h3>编程能力与计算思维</h3>
                        <p><br>编程能力，从某种意义上来说就是用代码实现既定逻辑的能力。
                        <p><br>计算机专业的思维，就是“以计算机的方式进行思考”。这种计算思维的培养只能通过大量的例题来进行。
                        <p><br>这也就是说，要提高编程能力，就需要先学会计算思维，形成一个用计算机的方向提出问题，思考问题，解决问题的过程。
                        <p><br>拥有这种思考问题的计算思维，是计算机专业与其他专业不同的根本之处。
                        <p><br>想要学到计算思维，首先要对这个领域充满兴趣，不至于因为大量题目让自己失去耐心。
                        <p><br>
                        <hr>
                        
                        <h3>培养编程能力的方向</h3>
                        <p><br>1、本文所说的ACM/ICPC比赛，对计算思维的提升非常有帮助。比赛的题目、过程、答案、目的都非常明确，非常适合用来训练计算思维。
                        <p><br>2、除此以外，想要提升自己的编码水平，很重要的一点就是要多看，看别人的代码。当对一个问题不懂时，可以参阅别人的代码，这里的参阅不是指把别人的代码整份抄过来，而是把它一行一行看懂，亲自地为别人的代码添加注释，从而了解到解决这个问题的通常方法。
                        <p><br>这能够为后来自己编码时提供很多帮助。这也就是“读书破万卷，下笔如有神”的道理。
                        <p><br>当然，对于日常来说，读书时用来提升编程水平最重要的手段（我觉得这甚至是唯一的手段）。看视频、听讲座这些，我觉得充其量也就是为了快速入门而投机取巧的方法。
                        <p><br>
                        <hr>
                        <h3>注意</h3>
			<p><br>还有一点我想说的：计算思维跟计算机语言无关。当你拥有了计算思维再去面对问题时，就会发现这个问题的“计算机解法”而非“C语言解法”或者“C++解法”。也就是说，你面对的问题本身，而不再是问题的细节。
			<p><br>总结一下：想要学好编程，一定要动手，每天保证一定的编码量和阅读量。
			<p><br>
			<p><br>
		        <div align ="center">
		        	<a href = "/AcmSteps/02.php">ACM竞赛的特点<input type = "button" value = "上一篇"></a>&nbsp;&nbsp;&nbsp;&nbsp;
		       	        <span><a href = "/AcmSteps/04.php"><input type = "button" value = "下一篇">正在规划中</a></span>
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