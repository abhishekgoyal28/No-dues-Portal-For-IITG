<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
$category=$_POST['category'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "goyal");
if($connection==false){
	//echo mysql_errno($connection);
	die(mysql_error());
}
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db=mysql_select_db("credentials",$connection);
if($db==false){
	//print 'errrrr';
	die('no database' .mysql_error());
}
// SQL query to fetch information of registerd users and finds user match.
if($category=="student")
	$query = mysql_query("SELECT * FROM student WHERE username='$username' AND password='$password'", $connection);
if($category=="prof")
	$query = mysql_query("SELECT * FROM prof WHERE username='$username' AND password='$password'", $connection);
if ($query==false)
{
    die(mysql_error());
}
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
$_SESSION['login_category']=$category;
if($category=="student")
	header("location: profile.php"); // Redirecting To Other Page
if($category=="prof")
	header("location: profile2.php"); 
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>