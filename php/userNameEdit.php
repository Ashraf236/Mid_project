<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Name Edit</title>
</head>
<body>
	<center>
        <table>
             
             <tr>    
                 <td><?php echo"Current User Name : ".$_SESSION['unm']; ?></td> 
             </tr>
             <tr>
             		<td>
                        <form method="post" action="editUserName.php">
             			New User Name:
             			<input type="text" name="uname"><br><br>
             			<input type="submit" name="changeUName" value="change">
                        </form>
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
