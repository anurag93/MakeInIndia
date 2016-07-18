<?php
 define('HOST','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','digital_india');

 $con=mysqli_connect(HOST,USER,PASS,DB) or die('Unable to connect');
 if($_SERVER['REQUEST_METHOD']==GET)
 { 
   if($_GET['edit']==null)
   {
   	$username=$_GET['name'];
    $comments=$_GET['comments'];
    $city=$_GET['city'];

    $sql="INSERT INTO `comments`(`username`, `comments`, `city`) VALUES ('$username','$comments','$city')";
    $result=mysqli_query($con,$sql);
   }
   else
   {
   	$username=$_GET['name'];
    $comments=$_GET['comments'];
    //$city=$_GET['city'];

    $sql="UPDATE `comments` SET `comments`='$comments' WHERE `username`='$username'";
    $result=mysqli_query($con,$sql);
   }
   

 }
 ?>