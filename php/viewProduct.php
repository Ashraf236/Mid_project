<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
</head>
<body>

	<center>
		<h1>Products</h1>
	<table border="1" width="50%">

	<tr>
   	     <th>Product Name</th>
   	     <th>Product Details</th>
   	     <th>Pric</th>
   </tr>
       <?php
         session_start();
         $file = fopen("product.txt", "r");

         while($da = fgets($file)){
    	   $ts = explode('|', $da);

    	    $_SESSION['pnam'] = $ts['0'];
    	    $_SESSION['pd'] = $ts['1'];
    	    $_SESSION['pp'] = $ts['2'];

    	    echo '<tr>'.'<td>'.$_SESSION['pnam'].'</td>'.'<td>'.$_SESSION['pd'].'</td>'.'<td>'.$_SESSION['pp'].'</td>'.'</tr>';
    	    //echo 'Products:'.'<br>'. 'Product Name:- '.$_SESSION['pnam'].'<br>'.'Product Details:-'.$_SESSION['pd'].'<br>'.'Product Price:-'.$_SESSION['pp'].'<BR>'.'<br>';
    	}
    	?>	

   
   </table>
 </h1>
 <BR>

	<h2>
		<a href="../view/user_view.html">BACK</a>
	</h2>
</center>
</body>
</html>