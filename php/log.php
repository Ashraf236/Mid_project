<?php
session_start();

if(isset($_POST['submit'])){

	$Unm = $_POST['name'];
	$Pass = $_POST['pass'];
    
    if(!$Unm == "" && !$Pass == ""){
             $myfile = fopen("data-save.txt","r");
       while($data = fgets($myfile)){
    	   $test = explode(" ",$data);
        
           if($Unm == $test[3] && $Pass == $test[4]){
        	    
           $_SESSION['email'] = $test[0];
           $_SESSION['fname'] = $test[1];
           $_SESSION['dob'] = $test[2];
           $_SESSION['unm'] = $test[3];
           $_SESSION['pass'] = $test[4];
           $_SESSION['utype'] = $test[5];
        
           
           if($_SESSION['utype'] == "User"){
           header('location: ../view/user_view.html');	
           } 
           else{
        	header('location: ../view/admin_view.html'); 
           }
           	
           }
           else {
        	echo "WRONG USER"."\n";
           }
        }
    } 
    else{
        echo "Empty";
    }
}
?>