<?php
   session_start();
   
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Email Edit</title>
</head>
<body>
	<center>
        <table>
             
             <tr>    
                 <td><?php echo"Current Email : ".$_SESSION['email']; ?></td> 
             </tr>
             <tr>
             		<td>
                       <form method="post" action="emailEdit.php">
             			New Email :
             			<input type="email" name="email"><br><br><br>
             			<input type="submit" name="changeEmail" value="change">
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


