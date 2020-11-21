<?php
if(isset($_POST['submit'])){
$pnm = $_POST['pname'];
$pds = $_POST['prodes'];
$pp = $_POST['pr'];

if(!$pnm == "" && !$pds == "" && !$pp == ""){
	
    extract($_REQUEST); 

    $file = fopen("product.txt","a"); 
     
    fwrite($file, $pnm.'|'.$pds.'|'.$pp." \r\n");

    fclose($file);

    echo "Product Added";
    echo include '../php/addpdt.php';




}
else{

	echo "Empty Field";
	echo include '../php/addpdt.php';
}

}

?>