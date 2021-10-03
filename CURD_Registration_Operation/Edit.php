<html>
<head>
	<title>Display Records</title>
	<style>
		#editbtn
		{
			background-color: green;
			color: white;
			width: 100px;
			font-size: 18px;
			height: 25px;
		}
	    #deletebtn
	    {
	    	background-color: red;
	    	color: white;
	    	width: 100px;
	    	font-size: 18px;
	    	height: 25px;
	    }

	</style>
</head>

<body>
<table border="3" cellspacing="10">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Class</th>
		<th>Contact</th>
		
		<th colspan="2" align="center">Operation</th>
	</tr>

<?php
include("connection.php");
error_reporting(0);

$query = "select * from users";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


if($total!=0)
{
	//$result = mysqli_fetch_assoc($data);

	while ($result=mysqli_fetch_assoc($data)) 
	{
		
	
		echo "
		<tr>
			<td>".$result['name']."</td>
			<td>".$result['email']."</td>
			<td>".$result['class']."</td>
			<td>".$result['Contact']."</td>
			<td><a href = 'Update.php?nm=$result[name]&em=$result[email]&cs=$result[class]&cn=$result[Contact]'><input type ='submit' value ='Update' id='editbtn'></a></td> 
			<td><a href = 'Delete.php?nm=$result[name]' onclick ='return checkdelete()'><input type ='submit' value='Delete' id='deletebtn'></a> </td>
			

			
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
<script>
	function checkdelete()
	{
		return confirm('Are you sure  you want to Delete record');

	}
</script>
</body>
</html>