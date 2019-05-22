<?php
require_once "connection.php";
$msg="";
if(isset($_POST['upload'])){
    $nume=$_POST['Nume'];
    $target="./images/".md5(uniqid(time())).basename($_FILES['Imagine']['name']);
    $culoare=$_POST['Culoare'];
    $marime=$_POST['Marime'];
    $pret=$_POST['Pret'];
    $sql="INSERT INTO flowers(Nume,Imagine,Culoare,Marime,Pret) VALUES('$nume','$target','$culoare','$marime','$pret')";
    mysqli_query($con,$sql);
    if(move_uploaded_file($_FILES['Imagine']['tmp_name'],$target)){
        header('Location:database.php');
    }else{
        $msg="No se puede";
    }
}
?>