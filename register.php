<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="login-page">
	  <div class="form">
	    <form class="register-form" action="includes/register.php" method="post">
	      <input name="reg_name" type="text" placeholder="name"/>
	      <input name="reg_pass" type="password" placeholder="password"/>
	      <input name="reg_email" type="text" placeholder="email address"/>
	      <button>create</button>
	      <p class="message">Already registered? <a href="#">Sign In</a></p>
	    </form>
	    <form class="login-form" action="includes/login.php" method="post">
	      <input name="log_email" type="email" placeholder="email"/>
	      <input name="log_pass" type="password" placeholder="password"/>
	      <button>login</button>
	      <p class="message">Not registered? <a href="#">Create an account</a></p>
	    </form>
	  </div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$('.message a').click(function(){
		   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
	</script>
</body>
</html>


