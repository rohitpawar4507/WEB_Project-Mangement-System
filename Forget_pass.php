<?php
include("connection.php");
session_start();

if(isset($_POST['change']))
{
    include("connection.php");
	$email = $_POST['email'];
	$psw = $_POST['psw'];
	//$password = $_POST['password'];
    //$role= $_POST['role'];

    $query = "SELECT * FROM users WHERE email = '$email' ";

	$data = mysqli_query($conn, $query);

	$total = mysqli_num_rows($data);
	//echo $total;

	if($total>0)
	{
       mysqli_query($conn,"UPDATE users SET psw='$psw' WHERE email='$email' "); 
       $_SESSION['email'] =$email;
       header("Location:LoginForm.php");

    }
    else{
        echo "<script>alert('Something went WORNG ')</script>";
    }

}
?>
<head>
	<title>Forget</title>
</head>
<body>

	<style type="text/css">

#box {
    background-color: pink;
		margin: auto;
		width: 300px;
		padding: 20px;
}
#button
{
    padding: 10px;
	width: 150px;
	color: white;
	background-color: blue;
	border: none;
}
input[type=email], input[type=password] 
{
    width:200px;
    height:28px;

}

</style>
<div style="font-size:25px;margin: 10px;font-family: Courier New;color: black;text-align:center;font-weight:bold;">Forgot Password</div>
<div id="box">
<form method="post" action="">
    
Email
<input type="email"  name="email"><p>
New Password
<input type="password" name="psw"><br><br><br>

<input id=button type="submit" name="change" value="Reset Password">
</form>
</div>
</body>
