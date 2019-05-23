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
                <li><a href="logare.php">Login</a></li>
                <li class="active"><a href="database1.php">Database</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
              </nav>
            </div>
  
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
  
          </div>
          </div>
        
        
      </header>

  
    <div class="site-section" align="center">
      <div class="container">
         <?php
          include 'connection.php';
          $sql="SELECT * FROM flowers ";
          //if(!isset($_POST['reset']))
            //{
            if(isset($_POST["search"]))
                    {
                        $search_term = mysqli_real_escape_string($con, $_POST["search_box"]);
                        $sql.="WHERE Nume='{$search_term}'";
                        $sql.=" OR Culoare='{$search_term}'";
                    }
           // }
          $query=mysqli_query($con,$sql)or die(mysqli_error($con));
         ?>
          
          <form name="search_form" method="post" action="database1.php">
              Search:<input type="text" name="search_box" value=""/>
              <input type="submit" name="search" value="Search the table">
              <input type="reset" value="Reset"/>       
          </form>
          
          <table width="70" cellpadding="4" cellspace="4">
              <tr>
                  <th><strong>Nume</strong></th>
                  <th><strong>Imagine</strong></th>
                  <th><strong>Culoare</strong></th>
                  <th><strong>Marime</strong></th>
                  <th><strong>Pret</strong></th>
                  <th colspan="3" align="center"><strong>Actions</strong></th>
              </tr>
              <?php while($row=mysqli_fetch_array($query)){?>
              <tr style="border-bottom: 1px solid black;">
                  <td><?php echo $row["Nume"];?></td>
                  <td><img src="<?php echo $row["Imagine"];?>" width="200" height="200"></td>
                  <td><?php echo $row["Culoare"];?></td>
                  <td><?php echo $row["Marime"];?></td>
                  <td><?php echo $row["Pret"];?></td>
                  <td>
              <?php echo "<a href=\"view1.php?id=".$row['ID']."\">View</a>";?>
              </td>
              </tr>
              <?php }?>
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