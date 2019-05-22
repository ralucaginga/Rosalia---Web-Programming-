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
      <?php
            if(!isset($_SESSION['user_name']))
            {
                header('Location:logare.php');
            }
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
                  <li><a href="home.php">Home</a></li>
                  <li class="active"><a href="database.php">Database</a></li>
                  <li><a href="logout.php">Logout</a></li>
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
            if(!isset($_POST["submit"])){
                $sql="SELECT * FROM flowers WHERE ID='{$_GET['id']}'";
                $result=mysqli_query($con,$sql);
                $record=mysqli_fetch_array($result);
            }else{
                $sql2="SELECT * FROM flowers WHERE ID='{$_POST['id']}'";
                $result2=mysqli_query($con,$sql2);
                $rec=mysqli_fetch_array($result2);
                if(basename($_FILES['Imagine']['name']) != ""){
                    $target="./images/".md5(uniqid(time())).basename($_FILES['Imagine']['name']);
                }
                else{ $target= $rec['Imagine'];}
                $sql1="UPDATE flowers SET Nume='{$_POST['Nume']}', Imagine='{$target}', Culoare='{$_POST['Culoare']}', Marime='{$_POST['Marime']}', Pret='{$_POST['Pret']}' WHERE ID='{$_POST['id']}'";
                mysqli_query($con,$sql1) or die(mysqli_error($con));
                move_uploaded_file($_FILES['Imagine']['tmp_name'],$target);
                header('Location:database.php');
            }
        ?>
          <h4>Edit the entry</h4>
          <form method="post"action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
              <table>
                    <tr>
                        <td colspan="2">
                            Nume:<br><input type="text" name="Nume" value="<?php echo $record['Nume'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Imagine:<br>
                        <input type="file"name="Imagine">
                        <img src="<?php echo $record['Imagine'];?>" width="200" height="200"><br/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Culoare:<br><input type="text" name="Culoare" value="<?php echo $record['Culoare'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Marime:<br><input type="text" name="Marime" value="<?php echo $record['Marime'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Pret:<br><input type="text" name="Pret" value="<?php echo $record['Pret'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" value="Edit">
                        </td>
                    </tr>
                </table>
            </form>
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