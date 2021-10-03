
<?php
error_reporting(0);
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
    $group_name = $_POST['group_name'];
    $project_name = $_POST['project_name'];
    $domain = $_POST['domain'];
    $m1_name = $_POST['m1_name'];
    $m1_email = $_POST['m1_email'];
    $m1_contact = $_POST['m1_contact'];
    $m2_name = $_POST['m2_name'];
    $m2_email = $_POST['m2_email'];
    $m2_contact = $_POST['m2_contact'];
    $m3_name = $_POST['m3_name'];
    $m3_email = $_POST['m3_email'];
    $m3_contact = $_POST['m3_contact'];
    $m4_name = $_POST['m4_name'];
    $m4_email = $_POST['m4_email'];
    $m4_contact = $_POST['m4_contact'];


   $sql = "INSERT INTO `group_main` (`group_id`, `group_name`, `project_name`, `domain`) VALUES (NULL, '$group_name', '$project_name', '$domain')";
   $res=$conn->query($sql);
   if($res)
   {
     //inserting group_id of group_main table
     $id=$conn->insert_id;
     $sql = "INSERT INTO `group_details` (`group_id`, `id`, `m1_name`, `m1_email`, `m1_contact`, `m2_name`, `m2_email`, `m2_contact`, `m3_name`, `m3_email`, `m3_contact`, `m4_name`, `m4_email`, `m4_contact`)  VALUES (NULL,'$id','$m1_name', '$m1_email','$m1_contact','$m2_name', '$m2_email', '$m2_contact','$m3_name', '$m3_email', '$m3_contact','$m4_name', '$m4_email', '$m4_contact')";   
   }
   
  

  
  
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