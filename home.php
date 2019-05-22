<!DOCTYPE html>
<?php 
    ob_start();
    session_start();
    session_regenerate_id();
?>
<html lang="en">
  <head>
    <title>Rosalia🌹</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/anti_right.js"></script>
  </head>
  <body>
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3"></script>
    <?php
            $name='';
            $user="Raluca";
            $pass="Ginga";
            $adminuser="Admin";
            $adminpass="admin";
            if(isset($_COOKIE['rememberme']))
            {
                if((isset($_COOKIE['username']))&&(isset($_COOKIE['password'])))
                {
                    if(($_COOKIE['username']!=$user)||($_COOKIE['password']!=md5($pass)))
                    {
                        if(($_COOKIE['username']!=$adminuser)||($_COOKIE['password']!=md5($adminpass)))
                        {
                            header("Location:logare.php");
                        }
                        else
                        {
                            $_SESSION['user_name']='Admin';
                        }
                    }
                    else
                    {
                        $_SESSION['user_name']='Raluca';
                    }
                }
                else
                {
                    header('Location: logare.php');
                }
            }
            else
            {
                header("Location: logare.php");
            }
            
            class AfisareNume
            {
                public $name='';
                
                public function setName($var)
                {
                    $this->name=$var;
                }
                
                public function WelcomeUser()
                {
                    return "<h1>Hello, ".$this->name."!!!</h1>";
                }
            }
            $user = new AfisareNume();
            $user->setName($_SESSION['user_name']);
        ?>
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
      
    
    <header class="site-navbar py-1" role="banner">

        <div class="container">
          <div class="row align-items-center">
            
            <div class="col-6 col-xl-2">
              <h1 class="mb-0"><a href="#" class="text-black h2 mb-0">Rosalia🌹</a></h1>
            </div>
            <div class="col-10 col-md-8 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
  
                <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                  <li class="active"><a href="home.php">Home</a></li>
                  <li><a href="database.php">Database</a></li>
                  <li><a href="logout.php">Logout</a></li>
                  </ul>
              </nav>
            </div>
  
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
  
          </div>
  
          </div>
        
        
      </header>

  
    <div class="site-section" data-aos="fade-up" style="text-align:center;">
      <div class="container">
        <?php
           echo $user->WelcomeUser();
        ?>
          <img id="welcome" src="images/welcome1.jpg" width="800px" alt="Welcome" hidden>
          <canvas id="myCanvas" width="900px" height="590px" style="border:1px solid gray;">
              Your browser doesn't support the HTML5 canvas tag.
          </canvas>
          <script>
            window.onload = function() {
            var canvas = document.getElementById("myCanvas");
            var ctx = canvas.getContext("2d");
            var img = document.getElementById("welcome");
            ctx.drawImage(img, 10, 10);
            };
        </script>
        <video width="600" height="360" controls>
            <source src="audio/Tulip Fields in My Garden Spring Flowers.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video><br>
        <audio controls>
            <source src="audio/Flower (relaxing music).mp3" type="audio/mp3">
            Your browser does not support the audio element.
        </audio><br>
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
      </div>
     </div>

    
    <footer class="site-footer">
        <p style="text-align:center">
       Copyright &copy;<script>document.write(new Date().getFullYear());</script> Raluca-Andreea Gînga | All rights reserved
        </p>
    </footer>
  </div>
 
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>