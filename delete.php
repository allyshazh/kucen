<?php
	require "connect.php";
	$id = $_GET['id'];
	$sql = "DELETE FROM booking WHERE id='$id'";
	$execute = mysqli_query($connect,$sql);

	if ($execute) {
		header("Location:display.php");
	}
	else{
		echo "Fail to delete";
	}

?>
