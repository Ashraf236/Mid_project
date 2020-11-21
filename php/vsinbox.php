<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
			background-color: skyblue;

		}
	</style>
</head>
<body>
<h2>
	<?php
session_start();
$file = fopen("support.txt","r");

while($dta = fgets($file)){
     $tt = explode('|',$dta);

     $_SESSION['nam'] = $tt['0'];
     $_SESSION['em'] = $tt['1'];
     $_SESSION['f'] = $tt['2'];

     echo 'PROBLEM:'.'<br>'.'Name:-'.$_SESSION['nam'].'<BR>'.'Email:-'.$_SESSION['em'].'<BR>'.'Message:-'.$_SESSION['f'].'<BR>'.'<BR>'; 

}



	?><BR>


<a href="../view/admin_view.html">BACK</a>
</h2>
</body>
</html>