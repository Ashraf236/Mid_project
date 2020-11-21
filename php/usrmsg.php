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
	<h2>
<?php
session_start();
$files = fopen("user-msg.txt","r");

while($d = fgets($files)){
     $t = explode('|',$d);

     $_SESSION['NAME'] = $t['0'];
     $_SESSION['EM'] = $t['1'];
     $_SESSION['MSG'] = $t['2'];

     echo 'MESSAGE:'.'<br>'.'Name:-'.$_SESSION['NAME'].'<BR>'.'Email:-'.$_SESSION['EM'].'<BR>'.'Message:-'.$_SESSION['MSG'].'<BR>'.'<BR>'; 
		
}
?>
<a href="../view/admin_view.html">BACK</a>

	</h2>

</body>
</html>