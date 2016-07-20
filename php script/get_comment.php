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
    while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    	$tableArray['AllComments']=$row;
    }
    echo json_encode($tableArray);
    
   }
   else
   {
   	$city=$_GET['city'];
   	$sql_comments="SELECT `comment_id`,`comment`,`threads`,`thread_id` FROM comments WHERE city='$city'";
   	$result=mysqli_query($con,$sql_comments);
   	$tableArray=array();
   	while ($row=mysqli_fetch_assoc($result)) {
   		$tableArray['comments']=$row;
   	}
   	echo json_encode($tableArray);
   }
}
else
{
	echo "Error";
}
?>