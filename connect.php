<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','Satyam@259','form');
	if($conn->connect_error){ 
		die('Connection Failed : '. $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, email, gender, password, number)
     values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param->("sssssi",$name, $gender, $email, $password, $number);
		$stmt->execute();
		echo "registration SUccessfully...";
		$stmt->close();
		$conn->close();
	}
?>