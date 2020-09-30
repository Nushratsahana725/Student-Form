
<?php


$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$gender=$_POST['gender'];
$contact=$_POST['number'];
$degree=$_POST['degree'];
$engineering=$_POST['engineering'];
$hobbies=$_POST['hobbies'];
$address=$_POST['address'];
$attach=$_POST['fileToUpload'];


$conn = mysqli_connect('localhost','root','','imca');
	if($conn)
	{
		echo 'Connected Successfully'."<br>";
	}
	else
	{
		die('Could not connect:'.mysqli_error());
	}
	$sql = "INSERT INTO student
	(name,email,pass,gender,contact,degree,engineering,hobbies,address,attach) VALUES ('$name', '$email','$pass','$gender','$contact','$degree','$engineering','$hobbies','$address','$attach')";
	
	if(mysqli_query($conn,$sql))
	{
		echo "Record inserted successfully";
	}
	else
	{
		die('Error inserting record'.mysqli_error($conn));
	}






?> 