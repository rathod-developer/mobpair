<?php
	include("connect.php");

	$data = json_decode(file_get_contents('php://input'), true);

	$id = $data['id'];
	$ins = "DELETE FROM `user` WHERE id = '".$id."' ";
	mysqli_query($conn,$ins);
?>