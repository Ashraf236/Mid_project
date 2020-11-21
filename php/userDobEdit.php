<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User DOB Edit</title>
</head>
<body>
	<center>
        <table>
             
             <tr>    
                 <td><?php echo"Date Of Birth  : ".$_SESSION['dob']; ?></td> 
             </tr>
             <tr>
             		<td>
                        <form method="post" action="editDob.php">
             			New DOB :
             			<input type="Date" name="DOB"><br><br>
             			<input type="submit" name="changeDOB" value="change">
             		</td>	
             </tr>
             <tr>
                 <td>
                     <form action="../php/userProfile.php">
                    <input type="submit" name="back" value="Back">
                 </form>
                 </td>
             </tr>
        </table>
    </center>  
</body>
</html>
