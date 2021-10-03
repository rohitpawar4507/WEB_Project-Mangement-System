<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_project_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['submit'])) {

        $chkbox = $_POST['chkbox']; 
        $chkstr = implode(",",$chkbox);
        $name=$_POST['name'];
       
     // $sql = "INSERT INTO `domain` (`domain`) VALUES ('$chk')";
     
      $query ="INSERT INTO `domain` (`id`, `name`, `domain`) VALUES (NULL, '$name','$chkstr')";
      $data = mysqli_query($conn , $query);

      if($data)
      {
        echo "Data inserted Successfuly";
      }
      else
      {
         echo " failed";
      }


        
	   $conn->close();
    }


?>