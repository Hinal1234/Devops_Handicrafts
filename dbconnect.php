<?php
// Grab User submitted information
$username = $_POST["username"];
$pass = $_POST["password"];
// Connect to the database
$con = new mysqli('localhost:3308', 'root', '1234');
// Make sure we connected successfully
if($con->connect_error)
{
    die('Connection Failed'.$con->connect_error);
}
echo "Connection Successful";
// Select the database to use
mysqli_select_db($con,'handicraft');

$query = "Select * from registration WHERE username='$username' and password='$pass'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count<=0)
{
echo"Sorry, your credentials are not valid, Please try again.";
header("Location:UserLoginPage.php");
}
else {
echo"You are a validated user.";
header("Location:AfterSignIn.html");
}
?>