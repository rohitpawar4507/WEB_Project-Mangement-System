
<?php

error_reporting(0);
include("conn.php");


?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-image: url('uplpad.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
  <body>
    <form action="" method="POST" enctype="multipart/form-data">

    <input type="file" name="uploadfile">
    <input type="submit" value="Upload" name="submit">

</form>
<button onclick="goBack()">Go Back</button>

<script>
    function goBack() {
      window.history.back();
    }
    </script>
</body>
</html>

<?php
/*

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "Upload/".$filename;
//echo $_FILES["uploadfile"];
move_uploaded_file($tempname ,$folder);

echo $folder;
*/



if($_POST['submit'])
{
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "Upload/".$filename;
  //echo $_FILES["uploadfile"];
move_uploaded_file($tempname ,$folder);

echo $folder;

if($filename!="")
{
    $query = "INSERT INTO gallery VALUES ('$folder')";
    $data = mysqli_query($conn ,$query);

if($data)
{
    echo "Inserted";
}
}
else
{
    echo "Failed";
}
}

?>

