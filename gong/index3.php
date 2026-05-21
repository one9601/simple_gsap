<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Parallax scroll animation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="./style.css">
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>

</head>

<style>
    #background{
        background: #102a46;
        /* background: url(./background.png);
        background-repeat : no-repeat;
        background-size : cover;
        background-position : top center; */
    }
    #background div{
        position:absolute;
        top:0;
        left:0;
    }
    canvas{
    }
</style>
<body id="body">
  <?php 
  $mobile_agent = "/(iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/";
  ?>

  <div class="banner-parallax-wrap">
    <img src="apart.png" class="" alt="" id="apart">
    <div id="background"></div>
    <img src="cloud.png" alt="" id="cloud">
    <div id="banner-text">
      <p>프리미엄의 기준</p>
      <h2>GONGGAN</h2>
    </div>
  </div>

  <div class="scrollElement"></div>

  <div class="main-s2">
    <h2 class="main-s2-tit">
      　
    </h2>
    <p>
    <img src="../gong/main.jpg" alt="" style='max-width:100%'>
    </p>

  </div>




  <script>
    // ctx.arc(x좌표, y좌표, 반지름, 시작각도, 끝각도, 방향설정);
    // ctx.fillrect(x좌표, y좌표, 너비, 높이);
    $(document).ready(function(){
  var layers=6;
  var starDensity=0.008;
  
  
  var ww=$(window).width();
  var wh=$(window).height();

  var dpi=window.devicePixelRatio;
  var cw=ww*dpi;
  var ch=wh*dpi;
  var stars=ww*ww*starDensity*dpi;
  
  var contexts=[];
  
  function startBlinking($layer){
    function blink(){
      TweenMax.to($layer,0.2+(Math.random()*0.4),{
        opacity:0.4+(Math.random()*0.4),
        onComplete:blink,
        repeat:1,
        yoyo:true,
        ease:Quad.easeInOut
      }); 
    }
    blink();
  }
  
  for(var i=0;i<layers;i++){
    var $layer=$("<canvas/>")
    	.addClass("layer")
    	.attr({
        width:ww,
        height:wh
      })
    	.css({
        width:ww,
        height:wh
      })
    	.appendTo("#background")
    ;
    var ctx=$layer.get(0).getContext("2d");
    
    
    contexts.push(ctx); 
    startBlinking($layer);
    
  }
  
  
  
  for(var i=0;i<stars;i++){
    var x=Math.round(Math.random()*cw)-0.5;
    var y=Math.round(Math.random()*ch)-0.5;
    
    var s=Math.random();
    s=Math.pow(s,8)*1.7;
    s+=0.3
    if(Math.random()<0.1){
      s*=2;
    }
    if(s<0) s=0;
    
    var a=1;
    if(s<1){
      a=s;
      s=1;
    }
    
    var id=Math.round(Math.random()*(contexts.length-1));
    var ctx=contexts[id];


    ctx.fillStyle="#ecf4ff";
    ctx.translate(x,y);
    ctx.globalAlpha = a;
    ctx.rotate(Math.PI/4);
    ctx.fillRect(0,0,s*dpi,s*dpi);
    
    if(s>=1){
	    ctx.globalAlpha = 0.3;
      ctx.fillStyle="#9bb1dd";
      var shineSize=(s*s*s)*1.5*dpi;
      if(shineSize >= 30){
        shineSize = shineSize * 0.2;
      } else if (shineSize >= 20) {
        shineSize = shineSize * 0.3;
      }

		  ctx.fillRect((s-(shineSize))/2,(s-(shineSize))/2,shineSize,shineSize);
        // ctx.beginPath();
        // ctx.arc((s-(shineSize))/2,(s-(shineSize))/2, shineSize, 0, 360, false);
        // ctx.fill();
        

    }	
      
    ctx.rotate(-Math.PI/4);
    ctx.translate(-x,-y);
  }
 })
  </script>

  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/ScrollTrigger.min.js'></script>
  
  <?php 
    if(preg_match($mobile_agent, $_SERVER['HTTP_USER_AGENT'])){
      echo "<script  src='./mo_script.js'></script>";
    }else{
      echo "<script  src='./script.js'></script>";
    }
  ?>

</body>
</html>
