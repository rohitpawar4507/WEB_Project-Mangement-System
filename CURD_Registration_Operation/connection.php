<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_project_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
/*if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}*/
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['submit'])) {

	    $name = $_POST['name'];
        $email = $_POST['email'];
        $psw = $_POST['psw'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $class = $_POST['class'];
        $Departments = $_POST['Departments'];
        $Contact = $_POST['Contact'];
        $gender = $_POST['gender'];

       /* $sql_query = "INSERT INTO `users` (`name`,'email', `psw`, `password`, `role`, `class`, `Departments`, `Contact`, `gender`) VALUES ('$name', '$email', '$psw', '$password', '$role', '$class', '$Departments', '$Contact','$gender');";
*/
       $sql = "INSERT INTO `users` (`id`, `name`, `email`, `psw`, `password`, `role`, `class`, `Departments`, `Contact`, `gender`) VALUES (NULL, '$name', '$email', '$psw', '$password', '$role', '$class', '$Departments', '$Contact', '$gender');";
      /*if(mysqli_query($conn ,$sql_query))
        {
        	echo "New Details Entry inserted Successfully !";
        }
        else
        {
        	
        	echo "Error: " . $sql . "" . mysqli_error($conn);
        }

        
        mysqli_close($conn);*/

        if ($conn->query($sql) === TRUE) 
        {
  			echo "New record created successfully";
		} else 
		{
  			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	   $conn->close();
}


?>