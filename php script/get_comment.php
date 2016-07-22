<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','digital_india');

$con=mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
if($_SERVER['REQUEST_METHOD']=='GET')
{
   if($_GET['all']!='0')
   {
   	
   	$sql_comments="SELECT `comment_id`,`comment`,`threads`,`thread_id` FROM comments";
    $result=mysqli_query($con,$sql_comments);
    $tableArray=array();
    for($i=0;$i<mysqli_num_rows($result);$i++)
    {
    	$tableArray[$i]=mysqli_fetch_assoc($result);
    }
    echo json_encode($tableArray);

    
   }
   else
   {
   	$city=$_GET['city'];
   	$sql_comments="SELECT `comment_id`,`comment`,`threads`,`thread_id` FROM comments WHERE city='$city'";
   	$result=mysqli_query($con,$sql_comments);
   	$tableArray=array();
   	for($i=0;$i<mysqli_num_rows($result);$i++){
    	$tableArray[$i]=mysqli_fetch_assoc($result);
    }
   	echo json_encode($tableArray);
   }
}
else
{
	echo "Error";
}
?>