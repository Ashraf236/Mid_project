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
	<h1>
<?php
session_start();
    $file = fopen("product.txt", "r");

    while($da = fgets($file)){
    	$ts = explode('|', $da);

    	$_SESSION['pnam'] = $ts['0'];
    	$_SESSION['pd'] = $ts['1'];
    	$_SESSION['pp'] = $ts['2'];
    	echo 'Products:'.'<br>'. 'Product Name:- '.$_SESSION['pnam'].'<br>'.'Product Details:-'.$_SESSION['pd'].'<br>'.'Product Price:-'.$_SESSION['pp'].'<BR>'.'<br>';
    }
 
 ?>
 </h1>
 <BR>

	<h2>
		<a href="../view/admin_view.html">BACK</a>
	</h2>

</body>
</html>