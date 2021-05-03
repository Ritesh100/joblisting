<?php
	require_once "conn.php"; 
	error_reporting(0);
	//delete
	$id = $_GET['id'];

	$delete_query = "DELETE FROM jobseekers WHERE id='".$_GET["id"]."'";
	if (mysqli_query($conn, $delete_query)) {

    	header("Location: goback.php");
    	echo "!!!Sucessfully deleted!!!";
    	}

 ?>