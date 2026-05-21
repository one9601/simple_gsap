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
        /* background: #102a46; */
        background: url(./background.png);
        background-repeat : no-repeat;
        background-size : cover;
        background-position : top center;
        position : absolute;
        top : 0;
        width : 100%;
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
    <div id="background">
            <div class="shooting-stars">
                <div class="shooting-star"></div>
                <div class="shooting-star shooting-star--mid"></div>
                <div class="shooting-star shooting-star--fast"></div>
                <div class="shooting-star shooting-star--meh"></div>

                <div class="shooting-star shooting-star--mid-2"></div>
                <div class="shooting-star shooting-star--mid-3"></div>
                <div class="shooting-star shooting-star--mid-4"></div>
                <div class="shooting-star shooting-star--mid-5"></div>
                <div class="shooting-star shooting-star--mid-6"></div>
                <div class="shooting-star shooting-star--mid-7"></div>
                <div class="shooting-star shooting-star--mid-8"></div>
                <div class="shooting-star shooting-star--mid-9"></div>

                <div class="shooting-star shooting-star--fast-1"></div>
                <div class="shooting-star shooting-star--fast-2"></div>
                <div class="shooting-star shooting-star--fast-3"></div>
                <div class="shooting-star shooting-star--fast-4"></div>
            </div>

    </div>
    <img src="cloud.png" alt="" id="cloud">
    <div id="banner-text">
      <p>로렘입숨</p>
      <h2>Lorem Ipsum</h2>
    </div>
  </div>

  <div class="scrollElement"></div>




 

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
