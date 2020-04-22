<?php
	include("connect.php");

	$data = json_decode(file_get_contents('php://input'), true);

	$fname = $data['first_name'];
	$lname = $data['last_name'];
	$email = $data['email'];
	$password = $data['password'];
	$id = $data['id'];
	$datetime = date("Y-m-d H:i:s");
	$upd = "UPDATE `user` SET `first_name` = '".$fname."', `last_name` = '".$lname."', `email` = '".$email."', `password` = '".$password."', `datetime` = '".$datetime."' WHERE id = '".$id."' ";
	mysqli_query($conn,$upd);
?>