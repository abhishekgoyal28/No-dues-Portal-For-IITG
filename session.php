<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = @mysql_connect("localhost", "root", "goyal");
// Selecting Database
$db = @mysql_select_db("credentials", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
$user_check2=$_SESSION['login_category'];
// SQL Query To Fetch Complete Information Of User
if($user_check2=="student")
	$ses_sql=@mysql_query("select username from student where username='$user_check'", $connection);
if($user_check2=="prof")
	$ses_sql=@mysql_query("select username from prof where username='$user_check'", $connection);
$row = @mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: ind.php'); // Redirecting To Home Page
}
?>