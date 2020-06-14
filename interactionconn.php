<?php 
include_once 'connection.php';
// if(isset($_POST['search']))
// {
// 	$search=$_POST['search'];

// 	$sql = "SELECT question FROM data";
// 	$result = $conn->query($sql);
// 	if ($result->num_rows > 0)
// 	{
//   				// output data of each row
// 		  while($row = $result->fetch_assoc()) 
// 		  {
// 		  	if($row[question]==$search)
// 		  	{
// 		  		$sql="SELECT description FROM data";
// 		  		if (mysqli_query($conn,$sql)) 
// 						{
// 		    				echo "question  :  " . $search."<br>". "Answer :   " . $row["description"]. "<br>";
// 		   	 				//header('Location:interaction.php');
// 						} 
// 						else 
// 						{
// 		    				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// 						}
// 		  	}
// 		  }	



// }
if(isset($_POST['submit']))
{
	
	$categories=$_POST['categories'];
	$question=$_POST['question'];
	$description=$_POST['description'];
	$email=$_POST['email'];

	$sql = "INSERT INTO data (categories,question,description,email) VALUES ('$categories','$question','$description','$email')";
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
?>