<?php

include("connection.php");
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
	<script type="text/javascript" src="valid33.js"></script>
</head>
<body>

	<style type="text/css">
	
	input[type=text], input[type=password] {
		width=100%;
		height:25px;
		border-radius:5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}


	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: blue;
		border: none;
	}

	#box{

		background-color: pink;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
	
	}
	

	</style>

<div style="font-size:35px;margin: 10px;color: black;text-align:center;font-weight:bold;font-family: Courier New;">Login</div>
<div id="box">
		
		<form method="post">
	
			Email<input id="text" type="text" name="email" required><br><br>
			Password<input id="text" type="password" name="psw" required><br><br>
			<label for="role"><b>Role</b></label>
    <br><br>
    <input type="radio" name="role" value="Student" id="Student">
            &nbsp;
        <span id="Student">Student</span>
        &nbsp;&nbsp;&nbsp;
    <input type="radio" name="role" value="Faculty" id="Faculty">
         &nbsp;
    <span id="Faculty">Faculty</span>
        
    <br><br>
		
			<input id="button" type="submit" value="Login" name="login"><br><br>

          <a href="Forget_pass.php">Forget Pasword</a><br>
		  <a href="Registration.html">Click to Registeration</a><br><br>    
		   
		</form>
	</div>
	
</body>
</html>

<?php

if(isset($_POST['login']))
{
	include("connection.php");
	$email = $_POST['email'];
	$psw = $_POST['psw'];
    $role= $_POST['role'];

    $query = "SELECT * FROM users WHERE email = '$email' && psw = '$psw' && role='$role' ";
	//$query = "SELECT * FROM users1 WHERE role = '$role' && password = '$password'";
	

	$data = mysqli_query($conn, $query);

	$total = mysqli_num_rows($data);
	//echo $total;

	if($total>0)
	{
		$_SESSION["role"] = $_POST['role'];
		header("Location: index.php");
		die;
		
		
	}
	else
	{
		echo "Login Failed";
	}
}

?>