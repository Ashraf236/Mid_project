<?php
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>User Password Change</title>
</head>
<body>
	<center>
	 
        <table>
             
             <tr>
             		<td>
                        <form method="post" action="passEdit.php">
             			New Password :
             			<input type="Password" name="newPass"><br><br>
                        Re-type New Password :
                        <input type="Password" name="rePass"><br><br>

                         <input type="submit" name="changePass" value="change">
                       
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
