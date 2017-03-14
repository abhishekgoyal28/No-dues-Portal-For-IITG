<?php
include('profile2.php');

$connection = @mysql_connect("localhost", "root", "goyal");
if($connection==false){
	//echo mysql_errno($connection);
	die(mysql_error());
}
$result3 = mysql_query("SELECT * FROM student",$connection);
//$row3 = mysql_fetch_array($result3);
$roll_no=$_POST['roll_no'];
$section=$_POST['section'];


$db=mysql_select_db("credentials",$connection);
if($db==false){
	print 'errrrr';
	die('no database' .mysql_error());
}
while($row3 = mysql_fetch_array($result3))
{
	echo "wewe";
	
	if($roll_no == $row3['roll_no'])
		{
			echo $change;
			$sql = mysql_query("UPDATE student set $section=1 where roll_no=$roll_no", $connection);
		}

}
//$sql = "UPDATE student set lab1=1 where uid=1";


mysql_close($connection);
//echo $as;

header("Location: profile2.php"); // Redirecting To Home Page

?>