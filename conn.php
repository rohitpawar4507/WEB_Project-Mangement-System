<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_project_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if ($conn) 
{
  
 // echo "Connection Successful";
}
else
{
  echo "Connection failed".mysqli_connect_error();
}


?>