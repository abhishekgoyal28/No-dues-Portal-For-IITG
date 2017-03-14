
<?php
include('login2.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>NO DUES PORTAL</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body class="hello">
<div id="main"><br><br><br>
<h1>NO DUES PORTAL</h1>
<div id="login">
<h2>Login Form</h2>
<form action="login2.php" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br>
<input type="radio" name="category" value="student">Student<br>
<input type="radio" name="category" value="prof">Prof<br>
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>