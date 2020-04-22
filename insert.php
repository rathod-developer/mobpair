<?php
	include("connect.php");

	$data = json_decode(file_get_contents('php://input'), true);
	$fname = $data['first_name'];
	$lname = $data['last_name'];
	$email = $data['email'];
	$password = $data['password'];
	$datetime = date("Y-m-d H:i:s");
	$ins = "INSERT INTO `user`(`first_name`, `last_name`, `email`, `password`, `datetime`) VALUES ('".$fname."','".$lname."','".$email."','".$password."','".$datetime."')";
	mysqli_query($conn,$ins);
?>