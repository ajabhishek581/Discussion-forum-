<?php 
include_once 'connection.php';
if(isset($_POST['signin']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$dob=$_POST['dob'];
	$username=$_POST['username'];
	$userpass=$_POST['upass'];
	$reuserpass=$_POST['reupass'];

	$sql = "INSERT INTO signup (Name,LastName,DOB,Email,Password,CNFPassword) VALUES ('$fname','$lname','$dob','$username','$userpass','$reuserpass')";
	if (mysqli_query($conn,$sql)) 
	{
    	//echo "New record created successfully";
    	header('Location:login.php');
	} 
	else 
	{
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
?>
