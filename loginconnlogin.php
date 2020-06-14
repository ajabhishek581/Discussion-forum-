<?php 
include_once 'connection.php';
if(isset($_POST['signin']))
{
	$username=$_POST['username'];
	$userpass=$_POST['upass'];

	$sql = "SELECT Email,Password FROM signup";
	$result = $conn->query($sql);
	if ($result->num_rows > 0)
	{
  				// output data of each row
		  while($row = $result->fetch_assoc()) 
		  {
		    	
		    	if($row[Email]==$username && $row[Password]==$userpass)
		    	{
		    		$sql = "INSERT INTO login (email,password) VALUES ('$username','$userpass')";
		    		//$sql1= "INSERT INTO data (email) VALUES('$username')";
						if (mysqli_query($conn,$sql)) 
						{
		    				//echo "New record created successfully";
		   	 				header('Location:interaction.php');
						} 
						else 
						{
		    				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
		    	}
		   }
	}
	else
	{
		echo "0 results";
	}
}
?>
