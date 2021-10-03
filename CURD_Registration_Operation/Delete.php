<?php

include("connection.php");
error_reporting(0);

$name = $_GET['nm'];

$query = "DELETE FROM `users` WHERE name='$name'";


$data = mysqli_query($conn,$query);

if($data)
{
	echo "<script>alert('Record Deleted from database')</script>";

	?>
	<meta http-equiv="Refresh" content="0 url=http://localhost/code/Demo/Display1.php">
	<?php
}
else
{
	echo "<font color='red'>Failed to Delete Record from database";
}

?>