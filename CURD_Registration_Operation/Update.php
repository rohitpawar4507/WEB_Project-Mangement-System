
<?php

include("connection.php");
error_reporting(0);

$nm = $_GET['nm'];
$em = $_GET['em'];
$cs = $_GET['cs'];
$cn = $_GET['cn'];


?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
 
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
  
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}
.select{
    width: fit-content;
    column-width: 20px;
}
/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="" method="GET">
  <div class="container">
    <h1>Register Here</h1>
    
    <p>Please fill in this form to update information.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter your Name" value="<?php echo "$nm" ?>"    name="name" id="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" value="<?php echo "$em" ?>" name="email" id="email" required>

    <label><b>Class :</b></label>
            <br><br>
    <input type="radio" name="class" value="<?php echo "$cs" ?>" id="FE" value="FE">
            &nbsp;
        <span id="FE">FE</span>
        &nbsp;&nbsp;&nbsp;
    <input type="radio" name="class" id="SE" value="SE">
         &nbsp;&nbsp;&nbsp;
    <span id="SE">SE</span>
  &nbsp;
    <input type="radio" name="class" id="TE" value="TE">
            &nbsp;
        <span id="TE">TE</span>
        &nbsp;&nbsp;&nbsp;
    <input type="radio" name="class" id="BE" value="BE">
         &nbsp;
    <span id="BE">BE</span>
    <br><br> 
    
<br><br>
    <label><b>Contact No:</b></label>
    <br>
    <input type="text" name="Contact" value="<?php echo "$cn" ?>"
    id="Contact" placeholder="Enter your Contact No." required>    
    
    <input type="submit" name="submit" value="Update" class="registerbtn">
  </div>
  
  
</form>
</body>
</html>


<?php

if($_GET['submit'])
{
    $name = $_GET['name'];
    $email = $_GET['email'];
    $class = $_GET['class'];
    $Contact = $_GET['Contact'];

$query = "UPDATE users SET name='$name',email='$email',class=' $class',Contact='$Contact' WHERE name= '$name'";

$data = mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('Record Updated')</script>";
   ?>
   ?>
  <meta http-equiv="Refresh" content="0 url=http://localhost/code/Demo/Display1.php">
  <?php

  

}
else
{
    echo "Failed to update";
}
}

?>