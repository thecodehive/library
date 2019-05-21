<?php  

include '../config/db.php';

if (isset($_POST['reg_name']) && isset($_POST['reg_pass']) && isset($_POST['reg_email'])) 
{
	$name = preg_replace('#[^a-z]#i', '', $_POST['reg_name']);
	$email = trim(mysqli_real_escape_string($con, $_POST['reg_email']));
	$pass = trim($_POST['reg_pass']);
	
	$sql = "INSERT INTO user (name, pass, email) VALUES('$name', '$pass', '$email')";

  if(mysqli_query($con, $sql))
  {
  	header('location: ../register.php');
  	echo "User registered successfully";

  }
  else{
  	header('location: ../register.php');
  	echo "An error occured. Please try again!";
  }

}
else
{
	header('location: ../register.php');
	echo "Please enter all details";
}



?>

