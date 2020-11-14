<?php
if(isset($_POST['submit'])){
	$nm = $_POST['name'];
	$eml = $_POST['email'];
    $fbk = $_POST['fdbk'];

    if(!$nm == "" && !$eml == "" && !$fbk == ""){
    	extract($_REQUEST); 
        $file = fopen("support.txt","a"); 
 
    
        fwrite($file, $nm.' '.$eml.' '.$fbk." \r\n");
    
        fclose($file);

        echo "Your problems has been noted... we will reponce soon, thank you "; 

    }

    else{
    	echo "every field is requried. <br>";
    }

}


?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <a href="../view/home.html">HOME</a>
</body>
</html>
