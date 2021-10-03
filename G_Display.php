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


$query="SELECT gm.group_id,gm.group_name,gm.project_name,gm.domain,gd.group_id,gd.id,gd.m1_name,gd.m1_email,gd.m1_contact,gd.m2_name,gd.m2_email,gd.m2_contact,gd.m3_name,gd.m3_email,gd.m3_contact,gd.m4_name,gd.m4_email,gd.m4_contact  FROM group_main gm,group_details gd WHERE gm.group_id=gd.id";
$res=$conn->query($query);

echo"<table border='1'>";
echo"<tr><th>ID</th><th>Group_Name</th><th>Project_Name</th><th>Domain</th>
<th>m1_Name</th><th>m1_Email</th><th>m1_Contact</th>
<th>m2_Name</th><th>m2_Email</th><th>m2_Contact</th>
<th>m3_Name</th><th>m3_Email</th><th>m3_Contact</th>
<th>m4_Name</th><th>m4_Email</th><th>m4_Contact</th>  </tr>";

while($row=$res->fetch_assoc()){
    echo"<tr><td>".$row['id']."</th><th>".$row['group_name']."</td><td>".$row['project_name']."</td><td>".$row['domain']."</td>
<td>".$row['m1_name']."</td><td>".$row['m1_email']."</td><td>".$row['m1_contact']."</td>
<td>".$row['m2_name']."</td><th>".$row['m2_email']."</td><td>".$row['m2_contact']."</td>
<td>".$row['m3_name']."</td><th>".$row['m3_email']."</td><td>".$row['m3_contact']."</td>
<td>".$row['m4_name']."</td><th>".$row['m4_email']."</td><td>".$row['m4_contact']."</td>  </tr>";



}
echo"</table>";



?>