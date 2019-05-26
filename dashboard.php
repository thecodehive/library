<?php

$name = '';

if (isset($_GET['id'])) {
	$id = $_GET['id'];


	include 'config/db.php';

	$sql = "SELECT name FROM user WHERE id = $id";

	$query = mysqli_query($con, $sql);

	if ($query) {
		while ($row = mysqli_fetch_assoc($query)) {
			$name = $row['name'];
		}
	}
	elseif(mysqli_error($con)){
		echo "<h4 style='padding:1rem; background:#eee; color:coral; margin:0 auto; width:250px;'>".mysqli_error($con)."</h4>";
	}
}


/*
The following is an example of a legitimate HTTP request that could be made to the vulnerable application above.

http://localhost/library/dashboard.php?id=1
> admin

The following is an example of a malicious HTTP request that could be made to the vulnerable application above.
http://localhost/library/dashboard.php?id=-1 UNION SELECT pass FROM user where id=1
> admin.com
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="login-page">
	  <div class="form">
	    <h2>Hello, <span style="color: magenta;"><?php echo $name ?></span></h2>
	    <h3><br>Welcome to the dashboard</h3>
	  	<a href="register.php">Log out</a>
	  </div>
	</div>
</body>
</html>


