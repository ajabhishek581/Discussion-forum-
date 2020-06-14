<!-- ------------------------------------------------------Home page---------------------------------------------------------- -->


<html>
	<head>
	<title>Samasaya : Home</title>
<style>
table {

  

 	border-spacing: 5px;
}
th, td {
  	padding: 15px;


}
</style>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>Home</title>
<link rel="shortcut icon" type="image/x-icon" href="myicon.ico"/>
		<link rel="stylesheet" type="text/css" href="homeloginstyle.css">
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


<!-- ----------------------------------------------------Navigation---------------------------------------------------------- -->


			<div class="headNav">
				<ul class="general">
					<li><a href="home.php">Home</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="login.php">Login</a></li>
					<li><p align="right"><a href="signup.php">Sign Up</a></p></li>
				</ul>
			</div>
		</header><br>
<table align="left">
<tr>
<td style="text-align:center">
<font color="black">
		<h1>  Welcome to Discussion Forum</h1> <br>
		<p><b><font size="4">An online discussion site where people can hold conversations in the form of posted messages.</b></p>
		<b> <font size="4">Hey differ from chat rooms in that messages are often longer than one line of text, and are 
		      at least temporarily archived. Also, depending on the access level of a user or the forum set-up, 
		      a posted message might need to be approved by a moderator before it becomes publicly visible.
		</b>
</td>
<td>
<h1>Add a Topic</h1>
   <form action="homeconn.php"  name="test" method="post">
   
    <label for="categories"><strong>Categories:</strong></label>
                     <select class="selects" name="categories">
                     <option value="SelectCategory">Select Category</option>
                     <option valu="java">Java</option>
                     <option value="database">DataBase Management System</option>
                     <option value="HTML">HTML</option>
                     <option value="CSS">CSS</option>
                     <option value="javascript">Javascript</option>
                     </select>
  <p><strong>Question:</strong><br>
  <input type="text" name="question" class="question">
  <P><strong>Post Text:</strong><br>
  <textarea  rows="5" cols="30" class="description" name="description"></textarea>
  <p><strong>Your E-Mail Address:</strong><br>
   <input type="text" name="email" class="email"><br><br>
  <P><input type="submit" name="submit" value="Add Topic" class="submit" onclick="return checkinput()"></p>
  </form>
</td>
</tr>
</table>

</font>
<footer >
      <p>Company &copy Samasaya. All rights reserved.</p>
    </footer> 
</body>
</html>