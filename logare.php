<!DOCTYPE html>
<?php 
    ob_start();
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
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">Rosalia🌹</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li class="active"><a href="logare.php">Login</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>

          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>

        </div>
      
      
    </header>
      <?php
            class Captcha
            {
                public $var1;
                public $var2;
                public $sum;
                public function setVars()
                {
                    $this->var1=rand(1,9);
                    $this->var2=rand(1,9);
                }
                public function setSum()
                {
                    if(isset($this->var1)&&isset($this->var2))
                    {
                        $this->setVars();
                    }
                    $this->sum = $this->var1 + $this->var2;
                }
            }
            $captcha=new Captcha();
            $captcha->setVars();
            $captcha->setSum();
            $username='';
            $password='';
            $rememberme='';
            if(isset($_COOKIE['username']))
            {
                $username=$_COOKIE['username'];
            }
            if(isset($_COOKIE['password']))
            {
                $password=$_COOKIE['password'];
            }
            if(isset($_COOKIE['rememberme']))
            {
                $rememberme='checked';
            }
        ?>
    
    <div class="site-section" data-aos="fade-up">
      <div class="container">
        <form name="form" method="post" action="login.php">
                <table border="0" cellpadding="10" cellspacing="1" width="350" align="center" class="table-bordered">
                    <tr>
                        <td align="center" colspan="2">
                            Enter login details
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            Username
                        </td>
                        <td>
                            <input type="text" name="username" value="<?php echo $username; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            Password
                        </td>
                        <td>
                            <input type="password" name="password" value="<?php echo $password; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <?php echo $captcha->var1.' + '.$captcha->var2.' ='; ?>
                        </td>
                        <td>
                            <input type="text" name="captcha">
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2">
                            Remember me <input type="checkbox" name="RememberMe" <?php echo $rememberme; ?>>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2">
                            <input type="submit" name="submit" value="Submit">
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="correctsum" value="<?php echo $captcha->sum ?>">
            </form>
        </div>
        
        <br>
        
        <table align="center">
            <tr>
                <td>
                    <div class="bg-white fb-like container" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                </td>
            </tr>
        </table>
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