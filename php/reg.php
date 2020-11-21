<?php
if(isset($_POST['submit'])){
   $fnm  = $_POST['fname'];
   $eml = $_POST['email'];
   $db = $_POST['dob'];
   $unm = $_POST['uname'];
   $pass = $_POST['pass'];
   $cpass = $_POST['cpass'];
   $utype = $_POST['user'];


 if(!$fnm == "" && !$eml == "" && !$db == "" && !$unm == "" && !$pass == "" && !$cpass == "" && !$utype == "" ){

        
    extract($_REQUEST); 
    $myfile = fopen("data-save.txt","a"); 
 
    
    fwrite($myfile, $eml.' '.$fnm.' '.$db.' '.$unm.' '.$pass.' '.$utype. " \r\n");

    
    
    fclose($myfile);

 	echo "Registration complete...........Now you can login as an User or Admin  <br> "."<a href= '../view/login.html'>Login</a>";

 	
 }
 else{
 	echo "not registered......register again"."<a href= 'reg.html'>Back</a>";
 }



}

?>