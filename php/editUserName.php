<?php
       session_start();  
         $fName  = $_SESSION['fname'];
         $emil = $_SESSION['email'];
         $dob = $_SESSION['dob'];
         $uName = $_SESSION['unm'];
         $Pass = $_SESSION['pass'];
         $Utype = $_SESSION['utype'];
  if(isset($_SESSION['email'])){
  	     

  	if(isset($_POST['changeUName']) && !$_POST['uname']=="" ){
  	   $email = $_SESSION['email'];
       $UNAME = $_POST['uname'];


  		 $myfile = fopen('data-save.txt','r');
         $remove = $emil;
         $file = 'data-save.txt';
	       $info = file($file);
         foreach ($info as $index => $inf) {
         	$fields = explode(' ', $inf);
    		if($fields[0] == $remove){

    			unset($info[$index]);
    		}	
    	}
    	//var_dump($info);
	    file_put_contents($file, implode(' ', $info));
      fclose($myfile);

	    $myfile = fopen('data-save.txt','a');

	    fwrite($myfile, $email.' '.$fName.' '.$dob.' '.$UNAME.' '.$Pass.' '.$Utype. " \r\n");
	    fclose($myfile);
	    echo  "User Name  Changed"."<a href='../php/Logout.php'>Login</a>";

  	}
    else{
      echo "Empty"."<a href='../php/userNameEdit.php'>Back</a>";
    }

         


  }

?>