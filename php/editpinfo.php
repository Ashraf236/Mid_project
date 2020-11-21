<?php
session_start();


?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
			body{ 
                 background-color: skyblue;
			     
			}


		</style>
		
</head>
<body>
	<table align="center">
	<form>
		<fieldset>
			<legend><h1>INFORMATION</h1></legend>
<h2>
			NAME:-<?php ECHO $_SESSION['fname']; ?> <br>
			EMAIL:-<?php ECHO $_SESSION['email']; ?><br>
			DATE OF BIRTH:-<?php ECHO $_SESSION['dob']; ?><br>
			USER NAME:-<?php ECHO $_SESSION['unm']; ?><br>
			PASSWORD:-<?php ECHO $_SESSION['pass']; ?><br>
			USER TYPE:-<?php ECHO $_SESSION['utype']; ?><br>
			GENDER:-<?php ECHO $_SESSION['lingo']; ?>
           
</h2>

		</fieldset>
	</form>
</table>
<h2>
<a href="../view/admin_view.html">BACK</a>
</h2>
</body>
</html>

