<?php
// Grab User submitted information
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
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
echo "1";
$query = "INSERT INTO `registration` (username, email, password) VALUES ('$username','$email','$password')";
echo "2";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
echo"Registered Successfully.";
header("Location:UserLoginPage.html");

?>