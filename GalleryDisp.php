<html>
    <head>
        <title>Gallery Page</title>
    <style>

    </style>
    </head>

    <body>
        <table border="2" cellspacing="7">






<?php

include("conn.php");
error_reporting(0);

$query = "Select * from gallery";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <img src='".$result['picsource']."'height='200' width='200'>
        
        ";

    }
}
else
{
    echo "No records found";
}

?>

</table>
</body>
</html>