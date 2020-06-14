<?php 
include_once 'connection.php';
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
    	header('Location:home.php');
	} 
	else 
	{
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
?>