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
        <title>AcmSteps01 - 童凌的官方网站</title>
</head>
<body>

        <!--导航栏-->
        <?php  require_once($header_index);?>
        
        <br><br><br>
        <div id = "wrapper">
        	<div id = "text">
        		<div align ="center">
        			<a href = "/AcmSteps/00.php">ACM Steps<input type = "button" value = "上一篇"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        			<span><a href = "/AcmSteps/02.php"><input type = "button" value = "下一篇">ACM比赛的特点</a></span>
       		 	</div>

		        <h1>ACM 简介</h1>
		        <p><br>
		        <h3> ACM是什么？</h3>
		        <p><br>·ACM是美国计算机协会(Association of Computing Machinery)的简称，由一个世界性的计算机从业人员专业组织。
		        <p><br>·ACM创立于1947年，是世界上第一个科学性以及教育性计算机学会。
		        <p><br>·ACM每年都出版大量计算机科学论文，并且对每项专业设有兴趣小组。兴趣小组每年也在全世界举办世界性讲座以及会谈，以供各个会员分享他们的研究成果。
		        <p><br>·ACM在1970年举办了第一届程序设计比赛，作为一种全新的发现和培养计算机科学顶尖学生的方法，竞赛很快得到了美国和加拿大各个大学的积极响应，并逐渐演变成目前的一年一度的多国参与的国际性比赛。
		        <p><br>
		        <hr>
		        <h3>竞赛的发展</h3>
		        <p><br>·最初几届比赛，参赛队伍主要来自美国和加拿大，后来逐渐发展成为一项世界范围内的竞赛。特别是自1997年IBM开始赞助赛事之后，赛事规模增长迅速。
		        <p><br>·1997年，总共有来自560所大学的840支队伍参加比赛。而到了2004年，这一数字迅速增加到840所大学的4109支队伍，并以每年10-20%的速度在增长。
		        <p><br>·在赛事的早期，冠军多为美国和加拿大的大学获得。而进入1990年代后期以来，俄罗斯和其它一些东欧国家的大学连夺数次冠军。
		        <p><br>·我国上海交通大学代表队则在2002年美国夏威夷的第26届和2005年上海的第29届,2010年哈尔滨的34届全球总决赛上三夺冠军。
		        <p><br>·浙江大学代表队在2011年在美国佛罗里达州的奥兰多的35届全球总决赛上夺冠。
		        <p><br>
		        <hr>
		        <h3>竞赛规则</h3>
		        <p><br>·ACM-ICPC以团队的形式代表各学校参赛，每队均由3名队员组成。每位队员必须是在校学生，有一定的年龄限制，并且最多可以参加2次全球总决赛和5次区域选拔赛。
		        <p><br>·比赛期间，每队使用1台电脑需要在5个小时内使用C、C++或Java中的一种编写程序解决7到10个问题。程序完成之后提交裁判运行，运行的结果会判定为正确或错误两种并及时通知参赛队。
		        <p><br>·有趣的是，每队在正确完成一题后，组织者将在其位置上升起一只代表该题颜色的气球。
		        <p><br>
		        <p><br>·竞赛的排名按照解答题目最多，且用时最少的队伍排序。每道试题用时将从竞赛开始到试题解答被判定为正确为止。
		        <p><br>·其间每一次提交运行结果被判错误的话将被加罚20分钟时间，未正确解答的试题不记时。
		        <p><br><img src = "img/01-01.png"/ width = "100%">
		        <p><br>·如图，在前三名中，“天壤”和“凤凰院·坦”的解答题目数量为7道，“罗旭”解答题目数量为6道，所以罗旭排第三名。由于前两名解决题目的数量相同，所以需要看前两支队伍的用时。
		        <p><br>·“天壤”的用时为177:43:14，“凤凰院·坦”的用时为493:17:02，前者用时更少，所以前者是第一名，后者是第二名。
		        <p><br>
		        <div align ="center">
		        	<a href = "/Template/AcmSteps.php">ACM Steps<input type = "button" value = "上一篇"></a>&nbsp;&nbsp;&nbsp;&nbsp;
		       	        <span><a href = "/AcmSteps/02.php"><input type = "button" value = "下一篇">ACM比赛的特点</a></span>
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