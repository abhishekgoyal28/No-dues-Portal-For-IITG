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
<b id="logout"><a href="logout2.php"><img src="logout.jpg" alt="Logout" height="40" width="40" ></a></b>
</div>
<div>

<?php
$link = @mysql_connect("localhost", "root", "goyal");

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysql_connect_error());

}
?>

 <head>
 <br>
 <link href="style2.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

 </head>
 
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<div class=center>
					<form action="clear.php" method="post">
					<label>ROLL NO.</label>
					<input id="roll_no" name="roll_no" placeholder="roll no" type="int"><br>
					<label>SECTION</label>
					<input id="section" name="section" placeholder="*******" type="text">
					<input name="Clear" type="submit"  class="loginmodal-submit" value=" clear ">
					</form>

					</div>

				</div><br>
				<div><h2>LIST OF STUDENTS</h2></div>
				
<?php
// Attempt select query execution

$sql = "SELECT * FROM prof WHERE username='$login_session'";
$result2 = mysql_query($sql, $link);
$row2 = mysql_fetch_array($result2);
$sql = "SELECT * FROM student";
$result = mysql_query($sql, $link);
if($result != false){
	if($row2['lab1']==1)
	{
    if(mysql_num_rows($result) > 0){

        echo "<table>";

            echo "<tr>";
                echo "<th>roll no.</th>";

                echo "<th>username</th>";
                
                echo "<th>lab1</th>";

            //    echo "<th>clear</th>";
            echo "</tr>";

        while($row = mysql_fetch_array($result)){
        	if($row['lab1']==0)
        	{
	   			//$clearlink = "<a href = 'profile2.php?update={$row['id_unique']}'>{$row['lab1']}=1'>" . $strNavn . "</a>"
           		
            	echo "<tr><tr>";
            		echo "<td>" . $row['roll_no'] . "</td>";
                	echo "<td>" . $row['username'] . "</td>";

                	echo "<td>" . $row['lab1'] . "</td>";

           			
            	echo "</tr></tr>";
            	
        	}
        }

        echo "</table>";

        // Close result set

        mysql_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }
	}

} else{

    echo "ERROR: Could not able to execute $sql. " . mysql_error($link);

}


$sql = "SELECT * FROM student";
$result = mysql_query($sql, $link);
//$sql = "SELECT $login_session FROM prof";
//$result2 = mysql_query($sql, $link);
if($result != false){
	if($row2['lab2']==1)
	{
    if(mysql_num_rows($result) > 0){

        echo "<table>";

            echo "<tr>";
                echo "<th>roll no.</th>";

                echo "<th>username</th>";
                
                echo "<th>lab2</th>";

            //    echo "<th>clear</th>";
            echo "</tr>";

        while($row = mysql_fetch_array($result)){
        	if($row['lab2']==0)
        	{
        		
            	echo "<tr><tr>";
            		echo "<td>" . $row['roll_no'] . "</td>";
                	echo "<td>" . $row['username'] . "</td>";

                	echo "<td>" . $row['lab2'] . "</td>";

	   	   
            	echo "</tr></tr>";
            	
        	}
        }

        echo "</table>";

        // Close result set

        mysql_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }
	}

} else{

    echo "ERROR: Could not able to execute $sql. " . mysql_error($link);

}
 
$sql = "SELECT * FROM student";
$result = mysql_query($sql, $link);
//$sql = "SELECT $login_session FROM prof";
//$result2 = mysql_query($sql, $link);
if($result != false){

	if($row2['hod']==1)
	{
    if(mysql_num_rows($result) > 0){

        echo "<table>";

            echo "<tr>";
                echo "<th>roll no.</th>";

                echo "<th>username</th>";
                
                echo "<th>hod</th>";

            //    echo "<th>clear</th>";
            echo "</tr>";

        while($row = mysql_fetch_array($result)){
        	
        	if($row['registrar']==1 && $row['cc_incharge']==1 && $row['lab1']==1 && $row['lab2']==1 && $row['lab3']==1 && $row['library']==1)
        	{
        		if($row['hod']==0)
        		{
           
            		echo "<tr><tr>";
            			echo "<td>" . $row['roll_no'] . "</td>";
                		echo "<td>" . $row['username'] . "</td>";

                		echo "<td>" . $row['hod'] . "</td>";

	   	   		//		echo "<td>" . $clearlink . "</td>";
           
            		echo "</tr></tr>";
            	
        		}
        	}
        }

        echo "</table>";

        // Close result set

        mysql_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }
	}

} else{

    echo "ERROR: Could not able to execute $sql. " . mysql_error($link);

}
 

 $sql = "SELECT * FROM student";
$result = mysql_query($sql, $link);
//$sql = "SELECT $login_session FROM prof";
//$result2 = mysql_query($sql, $link);
if($result != false){
	if($row2['library']==1)
	{
    if(mysql_num_rows($result) > 0){

        echo "<table>";

            echo "<tr>";
                echo "<th>roll no.</th>";

                echo "<th>username</th>";
                
                echo "<th>library</th>";

            //    echo "<th>clear</th>";
            echo "</tr>";

        while($row = mysql_fetch_array($result)){
        	if($row['library']==0)
        	{
        		
            	echo "<tr><tr>";
            		echo "<td>" . $row['roll_no'] . "</td>";
                	echo "<td>" . $row['username'] . "</td>";

                	echo "<td>" . $row['library'] . "</td>";

	   	   	//		echo "<td>" . $clearlink . "</td>";
           
            	echo "</tr></tr>";
            	
        	}
        }

        echo "</table>";

        // Close result set

        mysql_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }
	}

} else{

    echo "ERROR: Could not able to execute $sql. " . mysql_error($link);

}

$sql = "SELECT * FROM student";
$result = mysql_query($sql, $link);
//$sql = "SELECT $login_session FROM prof";
//$result2 = mysql_query($sql, $link);
if($result != false){
	if($row2['lab3']==1)
	{
    if(mysql_num_rows($result) > 0){

        echo "<table>";

            echo "<tr>";
                echo "<th>roll no.</th>";

                echo "<th>username</th>";
                
                echo "<th>lab3</th>";

            //    echo "<th>clear</th>";
            echo "</tr>";

        while($row = mysql_fetch_array($result)){
        	if($row['lab3']==0)
        	{
           
            	echo "<tr><tr>";
            		echo "<td>" . $row['roll_no'] . "</td>";
                	echo "<td>" . $row['username'] . "</td>";

                	echo "<td>" . $row['lab3'] . "</td>";

	   	   	//		echo "<td>" . $clearlink . "</td>";
           
            	echo "</tr></tr>";
            	
        	}
        }

        echo "</table>";

        // Close result set

        mysql_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }
	}

} else{

    echo "ERROR: Could not able to execute $sql. " . mysql_error($link);

}

$sql = "SELECT * FROM student";
$result = mysql_query($sql, $link);
//$sql = "SELECT $login_session FROM prof";
//$result2 = mysql_query($sql, $link);
if($result != false){
	if($row2['cc_incharge']==1)
	{
    if(mysql_num_rows($result) > 0){

        echo "<table>";

            echo "<tr>";
                echo "<th>roll no.</th>";

                echo "<th>username</th>";
                
                echo "<th>cc_incharge</th>";

            //    echo "<th>clear</th>";
            echo "</tr>";

        while($row = mysql_fetch_array($result)){
        	if($row['cc_incharge']==0)
        	{
           
            	echo "<tr><tr>";
            		echo "<td>" . $row['roll_no'] . "</td>";
                	echo "<td>" . $row['username'] . "</td>";

                	echo "<td>" . $row['cc_incharge'] . "</td>";

	   	   	//		echo "<td>" . $clearlink . "</td>";
           
            	echo "</tr></tr>";
            	
        	}
        }

        echo "</table>";

        // Close result set

        mysql_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }
	}

} else{

    echo "ERROR: Could not able to execute $sql. " . mysql_error($link);

}

$sql = "SELECT * FROM student";
$result = mysql_query($sql, $link);
//$sql = "SELECT $login_session FROM prof";
//$result2 = mysql_query($sql, $link);
if($result != false){
	if($row2['registrar']==1)
	{
    if(mysql_num_rows($result) > 0){

        echo "<table>";

            echo "<tr>";
                echo "<th>roll no.</th>";

                echo "<th>username</th>";
                
                echo "<th>registrar</th>";

            //    echo "<th>clear</th>";
            echo "</tr>";

        while($row = mysql_fetch_array($result)){
        	if($row['gymkhana']==1 && $row['warden']==1)
        	{
        	if($row['registrar']==0)
        	{
           
            	echo "<tr><tr>";
            		echo "<td>" . $row['roll_no'] . "</td>";
                	echo "<td>" . $row['username'] . "</td>";

                	echo "<td>" . $row['registrar'] . "</td>";

	   	   	//		echo "<td>" . $clearlink . "</td>";
           
            	echo "</tr></tr>";
            	
        	}
        }
    	}
        echo "</table>";

        // Close result set

        mysql_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }
	}

} else{

    echo "ERROR: Could not able to execute $sql. " . mysql_error($link);

}

$sql = "SELECT * FROM student";
$result = mysql_query($sql, $link);
//$sql = "SELECT $login_session FROM prof";
//$result2 = mysql_query($sql, $link);
if($result != false){
	if($row2['stdent_affair']==1)
	{
    if(mysql_num_rows($result) > 0){

        echo "<table>";

            echo "<tr>";
                echo "<th>roll no.</th>";

                echo "<th>username</th>";
                
                echo "<th>student_affair</th>";

            //    echo "<th>clear</th>";
            echo "</tr>";

        while($row = mysql_fetch_array($result)){
        	if($row['stdent_affair']==0)
        	{
           
            	echo "<tr><tr>";
            		echo "<td>" . $row['roll_no'] . "</td>";
                	echo "<td>" . $row['username'] . "</td>";

                	echo "<td>" . $row['stdent_affair'] . "</td>";

	   	   	//		echo "<td>" . $clearlink . "</td>";
           
            	echo "</tr></tr>";
            	
        	}
        }

        echo "</table>";

        // Close result set

        mysql_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }
	}

} else{

    echo "ERROR: Could not able to execute $sql. " . mysql_error($link);

}

$sql = "SELECT * FROM student";
$result = mysql_query($sql, $link);
//$sql = "SELECT $login_session FROM prof";
//$result2 = mysql_query($sql, $link);
if($result != false){
	if($row2['warden']!="null")
	{
    if(mysql_num_rows($result) > 0){

        echo "<table>";

            echo "<tr>";
                echo "<th>roll no.</th>";

                echo "<th>username</th>";
                
                echo "<th>warden</th>";

            //    echo "<th>clear</th>";
            echo "</tr>";

        while($row = mysql_fetch_array($result)){
        	if($row['warden']==0)
        	{
        		if($row['caretaker']==1)
           		{
            		echo "<tr><tr>";
            		echo "<td>" . $row['roll_no'] . "</td>";
                	echo "<td>" . $row['username'] . "</td>";

                	echo "<td>" . $row['warden'] . "</td>";

	   	   	//		echo "<td>" . $clearlink . "</td>";
           
            	echo "</tr></tr>";
            	}
        	}
        }

        echo "</table>";

        // Close result set

        mysql_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }
	}

} else{

    echo "ERROR: Could not able to execute $sql. " . mysql_error($link);

}
 
 $sql = "SELECT * FROM student";
$result = mysql_query($sql, $link);
//$sql = "SELECT $login_session FROM prof";
//$result2 = mysql_query($sql, $link);
if($result != false){
	if($row2['caretaker']!="null")
	{
    if(mysql_num_rows($result) > 0){

        echo "<table>";

            echo "<tr>";
                echo "<th>roll no.</th>";

                echo "<th>username</th>";
                
                echo "<th>caretaker</th>";

            //    echo "<th>clear</th>";
            echo "</tr>";

        while($row = mysql_fetch_array($result)){
        	if($row['caretaker']==0 && $row['hostal']==$row2['caretaker'])
        	{
           
            	echo "<tr><tr>";
            		echo "<td>" . $row['roll_no'] . "</td>";
                	echo "<td>" . $row['username'] . "</td>";

                	echo "<td>" . $row['caretaker'] . "</td>";

	   	   	//		echo "<td>" . $clearlink . "</td>";
           
            	echo "</tr></tr>";
            	
        	}
        }

        echo "</table>";

        // Close result set

        mysql_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }
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