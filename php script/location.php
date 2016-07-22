<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','digital_india');

$con=mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

if($_SERVER['REQUEST METHOD']=='GET')
{
   $location=$_GET['location'];
   $remarks=$_GET['remarks'];
   $latitude=$_GET['lat'];
   $longitude=$_GET['lon'];
   $city=$_GET['city'];

   $sql="INSERT INTO `location` (`location`,`remarks`,`latitude`,`longitude`,`city`) VALUES ('$location','$remarks','$latitude','longitude','city')";
   $result=mysqli_query($con,$sql);
}
else
{
	echo "Error";
}


?>