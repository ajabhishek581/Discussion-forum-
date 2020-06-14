
<html>
	<head>
		<meta charset="utf-8">
		<title>Samasaya : Login</title>
<link rel="shortcut icon" type="image/x-icon" href="myicon.ico"/>
<link rel="stylesheet" type="text/css" href="loginstyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
function checkinput()
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   if(document.test.username.value.match(mailformat))
   {
   		if((document.test.upass.value.length > 6) && (document.test.upass.value.length < 12))
   		{
     
		
		return true;
  		 }
  		else
   		{
			alert("password length must be greater the 6 and less then 12");
			return false;
  		 }
       return true;
   }
   else
   {
   	 alert("Please enter the valid userName");
   	return false;
   }

   
   
}
</script>
	</head>
	<body>
		<header>

<div class="headNav">
				<ul class="general">
					<li><a href="home.php">Home</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="about.html">About</a></li>
					<li><p align="right"><a href="signup.php">Sign Up</a></p></li>
				</ul>
			</div>
		</header>




		<div class="loginbox">
			<img src="avatar1.png" class="avatar">
			<h1 align="center">Login</h1>
			<form action="loginconnlogin.php"  name="test" method="post">


				<p>Username<sup style="color:red">*</sup></p>
				<input type="text" placeholder="Enter Username" name="username" required>
				<p>Password<sup style="color:red">*</sup></p>
				<input type="password" placeholder="Enter Password" name="upass" required></br>
				<input type="submit" value="Sign in" name="signin" onclick="return checkinput()"></br>
				<a href="forgotpassword.html">Forgot your password</a></br>
				<a href="signup.php">Don't have an account?</a>
			</form>
		</div>

	</body>
</html>
