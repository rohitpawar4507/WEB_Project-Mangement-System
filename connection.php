<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "my_project_database";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>