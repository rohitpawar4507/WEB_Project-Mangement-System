<html>
<head>
	<title>Display Records</title>
</head>

<body>
<table border="2">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Confirm Password</th>
		<th>Role</th>
		<th>Class</th>
		<th>Departments</th>
		<th>Contact</th>
		<th>Gender</th>
	</tr>

<?php
include("connection.php");
error_reporting(0);

$query = "select * from users";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


/*echo $result['name']." ".$result['email']." ".$result['psw']." ".$result['password']." ".$result['role']." ".$result['class']." ".$result['Departments']." ".$result['Contact']." ".$result['gender'];
*/
//echo $total
if($total!=0)
{
	//$result = mysqli_fetch_assoc($data);

	while ($result=mysqli_fetch_assoc($data)) 
	{
		
	
		echo "
		<tr>
			<th>".$result['name']."</th>
			<th>".$result['email']."</th>
			<th>".$result['psw']."</th>
			<th>".$result['password']."</th>
			<th>".$result['role']."</th>
			<th>".$result['class']."</th>
			<th>".$result['Departments']."</th>
			<th>".$result['Contact']."</th>
			<th>".$result['gender']."</th>

			
		</tr>
		";

	}
}
else
{
	echo "No records found";
}

?>
</table>
</body>
</html>