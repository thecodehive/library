<?php

	
	$con = mysqli_connect("localhost","root","","test");
	
	if(mysqli_connect_errno())
	{
		echo "Error occured while connecting with database ".mysqli_connect_errno();
	}
	else
	{
		// echo "Connected";
	}

	


?>