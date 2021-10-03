<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_project_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
/*if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}*/
if ($conn) 
{
  
  //echo "Connection Successful";
}
else
{
  echo "Connection failed".mysqli_connect_error();
}

/*
if (isset($_POST['submit'])) {

	    $rollno = $_POST['rollno'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        

       /* $sql_query = "INSERT INTO `users` (`name`,'email', `psw`, `password`, `role`, `class`, `Departments`, `Contact`, `gender`) VALUES ('$name', '$email', '$psw', '$password', '$role', '$class', '$Departments', '$Contact','$gender');";
*/
       /*$sql = "INSERT INTO `users` (`id`, `name`, `email`, `psw`, `password`, `role`, `class`, `Departments`, `Contact`, `gender`) VALUES (NULL, '$name', '$email', '$psw', '$password', '$role', '$class', '$Departments', '$Contact', '$gender');";
       */
      /* $sql = "INSERT INTO `student` (`rollno`, `firstname`, `lastname`, `email`, `password`) VALUES ('$rollno', '$firstname', '$lastname', '$email', '$password');";
      /*if(mysqli_query($conn ,$sql_query))
        {
        	echo "New Details Entry inserted Successfully !";
        }
        else
        {
        	
        	echo "Error: " . $sql . "" . mysqli_error($conn);
        }

        mysqli_close($conn);*/

      /*  if ($conn->query($sql) === TRUE) 
        {
  			echo "New record created successfully";
		} else 
		{
  			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	   $conn->close();
}
*/

?>