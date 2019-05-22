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
            session_destroy();
            unset($_COOKIE['username']);
            unset($_COOKIE['password']);
            unset($_COOKIE['rememberme']);
            setcookie('username',"",time()-60*60*24*365);
            setcookie('password',"",time()-60*60*24*365);
            setcookie('rememberme',"",time()-60*60*24*365);
            header("Location: index.php");
        ?>
    </body>
</html>
