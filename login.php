<!DOCTYPE html>
<?php 
    ob_start();
    session_start();
    session_regenerate_id();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $user='Raluca';
        $password='Ginga';
        $adminuser='Admin';
        $adminpass='admin';
        function died($error)
            {
                echo "Eroare"."<br><br>";
                echo $error.'<br><br>';
                echo "<a href='logare.php'>Login</a>";
                die();
            }
        if(empty($_POST['username'])||empty($_POST['password']))
        {
            died("Completati username si parola");
            //echo "<script>alert('Completati username sau parola')</script>";
            header("Location: logare.php");
           
        }
        if(empty($_POST['captcha']))
        {
            died("Completati captcha");
        }
        else
        {
            if($_POST['captcha']==$_POST['correctsum'])
            {
                if((($_POST['username']==$user)&&($_POST['password']==$password))||(($_POST['username']==$adminuser)&&($_POST['password']==$adminpass)))
                {
                    $_SESSION['user_name']=$_POST['username'];
                    if(isset($_POST['RememberMe']))
                    {
                        setcookie('username',$_POST['username'],time()+60*60*24*365);
                        setcookie('password',md5($_POST['password']),time()+60*60*24*365);
                        setcookie('rememberme',true,time()+60*60*24*365);
                    }
                    header('Location: home.php');
                }
                else
                {
                    died("Incorrect username or password");
                }
            }
            else
            {
                died("Wrong captcha");
            }
        }
        ?>
    </body>
</html>
