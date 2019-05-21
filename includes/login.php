<?php  

include '../config/db.php';

if (isset($_POST['log_pass']) && isset($_POST['log_email'])) 
{
	$email = trim(mysqli_real_escape_string($con, $_POST['log_email']));
	$pass = trim($_POST['log_pass']);
	
	$sql = "SELECT email, pass FROM user WHERE email = '$email' AND pass = '$pass'";

  if(mysqli_query($con, $sql))
  {
  	header('location: ../dashboard.php');
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

