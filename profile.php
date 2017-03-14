<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="hello.css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout2.php">Log Out</a></b>



<?php
$link = @mysql_connect("localhost", "root", "goyal");

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysql_connect_error());

}
?>

<?php
// Attempt select query execution

$sql = "SELECT * FROM student WHERE username='$login_session'";
$result2 = mysql_query($sql, $link);
$row2 = mysql_fetch_array($result2);
$sql = "SELECT * FROM student";
$result = mysql_query($sql, $link);
if($result != false){
	
	
    if(mysql_num_rows($result) > 0){

        echo "<table class=\"table\">";

            echo "<tr>";
                echo "<th>roll no.</th>";

               
                
                echo "<th>hostel</th>";

                echo "<th>department</th>";

            //    echo "<th>clear</th>";
            echo "</tr>";

        //while($row = mysql_fetch_array($result)){
        	
        	
	   			//$clearlink = "<a href = 'profile2.php?update={$row['id_unique']}'>{$row['lab1']}=1'>" . $strNavn . "</a>"
           		
            	echo "<tr><tr>";
            		echo "<td>" . $row2['roll_no'] . "</td>";
                	

                	echo "<td>" . $row2['hostal'] . "</td>";
                	echo "<td>" . $row2['deparment'] . "</td>";

           			
            	echo "</tr></tr>";
            	
        	
        

        echo "</table>";

        // Close result set

        mysql_free_result($result);


	}

} else{

    echo "ERROR: Could not able to execute $sql. " . mysql_error($link);

}
// Close connection

mysql_close($link);

?>
</div>

<?php
$link = @mysql_connect("localhost", "root", "goyal");

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysql_connect_error());

}
?>

<?php
// Attempt select query execution

$sql = "SELECT * FROM student WHERE username='$login_session'";
$result2 = mysql_query($sql, $link);
$row2 = mysql_fetch_array($result2);
$sql = "SELECT * FROM student";
$result = mysql_query($sql, $link);
if($result != false){
	
	
    if(mysql_num_rows($result) > 0){

        echo "<table>";

            echo "<tr>";
                echo "<th>caretaker</th>";

               
                
                echo "<th>warden</th>";

                echo "<th>gymkhana</th>";

                echo "<th>Assistant Registrar</th>";

                echo "<th>library</th>";

                echo "<th>lab1</th>";

                echo "<th>lab2</th>";

                echo "<th>lab3</th>";

                echo "<th>cc incharge</th>";

                echo "<th>HOD</th>";

                echo "<th>Accountant</th>";
            //    echo "<th>clear</th>";
            echo "</tr>";

        //while($row = mysql_fetch_array($result)){
        	
        	
	   			//$clearlink = "<a href = 'profile2.php?update={$row['id_unique']}'>{$row['lab1']}=1'>" . $strNavn . "</a>"
           		
            	echo "<tr><tr>";
            		echo "<td>" . $row2['caretaker'] . "</td>";
                    echo "<td>" . $row2['warden'] . "</td>";
                	echo "<td>" . $row2['gymkhana'] . "</td>";
                	echo "<td>" . $row2['registrar'] . "</td>";
           			echo "<td>" . $row2['library'] . "</td>";
            		echo "<td>" . $row2['lab1'] . "</td>";
            		echo "<td>" . $row2['lab2'] . "</td>";
            		echo "<td>" . $row2['lab3'] . "</td>";
            		echo "<td>" . $row2['cc_incharge'] . "</td>";
            		echo "<td>" . $row2['hod'] . "</td>";
            		echo "<td>" . $row2['accountant'] . "</td>";
            	echo "</tr></tr>";
            	
        	
        

        echo "</table>";

        // Close result set

        mysql_free_result($result);


	}

} else{

    echo "ERROR: Could not able to execute $sql. " . mysql_error($link);

}
// Close connection

mysql_close($link);

?>








</div>
</body>
</html>