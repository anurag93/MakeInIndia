<?php
 define('HOST','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','digital_india');
 
 $con=mysqli_connect(HOST,USER,PASS,DB) or die('Unable to connect');
	if($_SERVER['REQUEST_METHOD']=='GET'){
		
		if($_GET['name']==null)
		{
			$sim= $_GET['sim'];
		
		$sql = "SELECT `sim_Serial_number`, `username`, `Password`, `City`, `Phone`, `mail` FROM `registry_details` WHERE sim_Serial_number='$sim'";
        $result=mysqli_query($con,$sql);

        $table_array=array();
        while($row=mysqli_fetch_assoc($result))
        	$table_array['table']=$row;
        echo  json_encode($table_array);
		}
		else {
			$name=$_GET['name'];
			$sim=$_GET['sim'];
			$password=$_GET['pass'];
			$city=$_GET['city'];
			$phone=$_GET['phone'];
			$mail=$_GET['mail'];
			$sql="INSERT INTO `registry_details` (`sim_Serial_number`, `username`, `Password`, `City`, `Phone`, `mail`) VALUES ('$sim','$name','$password','$city','$phone','$mail')";
			$result=mysqli_query($con,$sql);
			echo $result;

		}

		
	}else{
		echo "Error";
	}

?>