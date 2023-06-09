<?php
    include "db.php";
    echo"active";
	
	if (isset($_GET['id'])){

		
		$id=$_GET['id'];

		
		$sql="UPDATE `stud_details` SET
			`status`=1 WHERE id='".$id."'";

		
		mysqli_query($conn,$sql);
	}

	
	header('location: view_s.php');
?>
