<?php
    include "db.php";
    include 'fun.php';

    $connect=new connect();
    $fun=new fun($connect->dbconnect());
	
	if (isset($_GET['id'])){

		
		$id=$_GET['id'];
		$fun->updateStudentstatus($id);
		
	}

	
	header('location: view_s.php');
?>
