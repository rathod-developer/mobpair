<?php
	$conn = mysqli_connect("localhost","root","","mobpair");

	if(!$conn){
		echo "Error in Connection";
		exit;
	}
?>