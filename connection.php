<?php
	$servername="localhost:4307";
	$username="root";
	$password="";
	$dbname="responsiveform";

	$conn=mysqli_connect($servername,$username,'',$dbname);

	if($conn)
	{
		//echo "Connection ok";
	}
	else{
		echo "Connection Failed";
	}



?>
