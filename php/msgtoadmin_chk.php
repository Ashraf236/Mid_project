<?php
if(isset($_POST['submit'])){
$nm = $_POST['name'];
$Email = $_POST['email'];
$prob = $_POST['msg'];

if(!$nm == "" && !$Email == "" && !$prob == ""){
	
    extract($_REQUEST); 

    $files = fopen("user-msg.txt","a"); 
     
    fwrite($files, $nm.'|'.$Email.'|'.$prob." \r\n");

    fclose($files);

    echo "Your message has been delivered";
    echo include '../php/msgtoadmin.php';

}
else{

	echo "Empty Field";
	echo include '../php/msgtoadmin.php';
	
}

}

?>