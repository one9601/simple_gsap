<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Parallax scroll animation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="./style.css">
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>

</head>
<body id="body">
  <?php 
  $mobile_agent = "/(iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/";
  ?>

  <div class="banner-parallax-wrap">
    <img src="apart.png" class="" alt="" id="apart">
    <img src="background.png" alt="" id="background">
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
