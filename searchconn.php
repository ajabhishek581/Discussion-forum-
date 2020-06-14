<?php 
include_once 'connection.php';
if(isset($_POST['search']))
{
	$search=$_POST['search'];
$sql = "SELECT question FROM data";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
		  	if(strcmp($row["question"], $search))
		  	{
		  		$sql="SELECT question,description FROM data";
		  		if (mysqli_query($conn,$sql)) 
						{
		    				echo "question  :  " . $search."<br>". "Answer :   " . $row["description"]. "<br>";
		   	 				//header('Location:interaction.php');
						} 
						else 
						{
		    				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
		  	}
		  	else
		  	{
		  		echo "question is not present"."<br>";
		  	}
		  }	
	}
}
?>