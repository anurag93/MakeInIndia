<?php
define('HOST','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','digital_india');

 $con=mysqli_connect(HOST,USER,PASS,DB) or die('Unable to connect');
 if($_SERVER['REQUEST_METHOD']=='GET')
 {
 	//for entering the threads
 	if($_GET['editThread']==null)
 	{
 		$username=$_GET['username'];
 		$thread=$_GET['thread'];
 		$thread_id=$_GET['thread_id'];

 		$sql="INSERT INTO `comments`(`thread_id`,`username`, `threads`) VALUES ('$thread_id','$username','$thread')";
        $result=mysqli_query($con,$sql);
 	}
 	//for updating threads
 	else
 	{

 		$thread=$_GET['thread'];
 		$thread_id=$_GET['thread_id'];

 		$sql="UPDATE `comments` SET `thread`='$thread' WHERE `thread_id`='$thread_id'";
        $result=mysqli_query($con,$sql);
 	}
 }
 else
 {
 	echo "Error";
 }
 ?>