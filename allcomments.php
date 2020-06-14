<html>
	<head>
		<meta charset="utf-8">
		<title>Samasaya : Login</title>
	
<link rel="shortcut icon" type="image/x-icon" href="myicon.ico"/>
<link rel="stylesheet" type="text/css" href="allcomments.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
	<body  >
		
		<header>

<div class="headNav">
				<ul class="general">
					<li><a href="home.php">Home</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="home.php">Logout</a></li>
				</ul>
			</div>
		</header>




		<?php 
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "iwp";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) 
			{
			  	die("Connection failed: " . mysqli_connect_error());
			}
				$sql = "SELECT question,description,email FROM data";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) 
				{
  // output data of each row
 					 while($row = mysqli_fetch_assoc($result)) 
 					 {
 					 	echo "<br>";
 					 	echo "<br>";
 					 	echo  "<br>"."<b>"."Email address is  :  "."</b>".$row["email"] ." : "."</br>";
 					 	 echo  "<b>"."Question  :  ".$row["question"] ." : "."</b>";
 					 	 echo "<br>";
 					 	 echo  "<b>"."Answer   :  "."</b>".$row["description"];
 					 	 echo "<br>";
 					 	  					 }
 					}
 				else
 				{
 					echo "0 results";
 				}
 			
							


			mysqli_close($conn);

				

		 ?>

	</body>
</html>