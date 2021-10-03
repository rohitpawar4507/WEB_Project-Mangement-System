<?php 
session_start();

	include("connection.php");
	error_reporting(0);
	//include("functions.php");

	
	//$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
<?PHP
	if(strcmp($_SESSION['role'],"Student")==0)
{
	?>
	  <a href="Student_D.html">Student</a><br><br>
	  

<?PHP	}

elseif(strcmp($_SESSION['role'],"Faculty")==0)
{
	?>
	<a href="Faculty_Dashboard.html">Faculty</a>
<?PHP }
?>	 

	<br>
	
</body>
</html>