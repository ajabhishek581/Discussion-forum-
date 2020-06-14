
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="myicon.ico"/>
<link rel="stylesheet" type="text/css" href="signup.css">
<title>samasaya : signup</title>
 <meta charset="utf-8">

<script>
function checkinput()
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   if(document.test.username.value.match(mailformat))
   {
   		if((document.test.upass.value.length > 6 ) && (document.test.upass.value.length < 12))
   		{
   			   	
   			if(document.test.upass.value==document.test.reupass.value)
   			{
     
				alert("Thank you for Registration");
				return true;
  		 	}
  			else
   			{
				alert("passwords dont match");
				return false;
  			}
  				  return true;
  		}
        else
      	 {
      	 	alert("password length must be greater then 6 and less then 12");
      	 	return false ;
      	 }
      	
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

 <!-- ---------------------------------------------------------header section---------------------------------------- -->
		<header>

<div class="headNav">
				<ul class="general">
					<li><a href="home.php">Home</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="about.html">About</a></li>
					<li><p align="right"><a href="login.php">Login</a></p></li>
				</ul>
			</div>
		</header>
<!-- ------------------------------------------------------SignUp Form----------------------------------------------------  -->

<div class="loginbox">
			<img src="avatar1.png" class="avatar">
			<h1 align="center">Sign Up</h1>
			<form action="loginconn.php" name="test" method="post"  >
				<p> 
				<input type="text" placeholder="Name*" name="fname" required>
				<input type="text" placeholder="last name*" name="lname" required>
				<input type="date" placeholder="DOB*" name="dob" required></p>
				<p><input type="text" placeholder="Email id*" name="username" required>
				<input type="password" placeholder="Enter Password*" name="upass" required></br>
				<input type="password" placeholder="Renter Password*" name="reupass" required></br><br>
				<input type="submit" value="Sign in" name="signin" onclick="return checkinput()" ></br>
				
			</form>
		</div>

	 
</div>
<br>

<!-- ------------------------------------------------------Footer section----------------------------------------------------  -->

<footer >
      <p>Company &copy Samasaya. All rights reserved.</p>
    </footer> 
</body>
</html>