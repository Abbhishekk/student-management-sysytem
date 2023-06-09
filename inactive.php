<?php

	include "db.php";

	
	if (isset($_GET['id'])){

		$id=$_GET['id'];

		
		$sql="UPDATE `stud_details` SET
			`status`=0 WHERE id='$id'";

		// Execute the query
		mysqli_query($conn,$sql);
	}

	// Go back to course-page.php
	header('location: view_s.php');
?>
