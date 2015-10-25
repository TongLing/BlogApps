<meta http-equiv = "Content-Type" content = "text/html" charset ="UTF-8"/>
<style type = "text/css">
      @import"/Template/css/style.css";
</style>
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>  
    <div class="nav">  
        <a href="/index.php" name = "index">童凌的官方网站</a>
        <a href="/index.php" target="_self" >首页</a>  
        <a href="/WordPress-master" target="_self" >博客</a>  
        <a href="/Template/AcmSteps.php" target="_self" >Acm Steps</a>  
        <a href="/2048-game/index.html" target="_self" >2048 Game</a>  
        <i id="navslip"></i>  
    </div>  
    
    
    <script>  
        $(function (){  
            setSlip();  
        });  
        var setSlip = function(){  
            var slip = $('#navslip');  
            var a = $('.nav a:first');  
            //初始化滑块  
            slip.css({
                'width':a.width()+20,  
                'left' :parseInt(a.position().left) + 10 +'px'  
            });  
            $('.nav a').mouseenter(function(){  
                //显示滑块  
                if(slip.css('display') == 'none'){  
                    slip.show();  
                };  
                //移动滑块  
                slip.stop().animate({  
                    width: $(this).width()+20,  
                    left:  parseInt($(this).position().left) + 10 +'px'  
                },300);  
            });  
        };  
    </script>