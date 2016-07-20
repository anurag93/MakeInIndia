<?php
 define('HOST','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','digital_india');

 $con=mysqli_connect(HOST,USER,PASS,DB) or die('Unable to connect');
 if($_SERVER['REQUEST_METHOD']=='GET')
 { 
 	//for entering the comments
   if($_GET['edit_comment']=='0' )
   {
   	$username=$_GET['name'];
    $comments=$_GET['comments'];
    $city=$_GET['city'];
    $comment_id=$_GET['comment_id'];

    $sql="INSERT INTO `comments`(`comment_id`,`username`, `comment`, `city`) VALUES ('$comment_id','$username','$comments','$city')";
    $result=mysqli_query($con,$sql);
   }
   //for updating the comments
   else
   {
   	$username=$_GET['name'];
    $comments=$_GET['comments'];
    $comment_id=$_GET['comment_id'];

    $sql="UPDATE `comments` SET `comment`='$comments' WHERE `comment_id`='$comment_id'";
    $result=mysqli_query($con,$sql);
   }
  
 }
 else{
		echo "Error";
	}

 ?>