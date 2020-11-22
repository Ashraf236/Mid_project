<?php
       session_start();  
         $fName  = $_SESSION['fname'];
         $emil = $_SESSION['email'];
         $dob = $_SESSION['dob'];
         $uName = $_SESSION['unm'];
         $Pass = $_SESSION['pass'];
         $Utype = $_SESSION['utype'];
  if(isset($_SESSION['email'])){
         

    if(isset($_POST['changePass']) && !$_POST['newPass'] == "" && !$_POST['rePass'] =="" ){
       $email = $_SESSION['email'];
       $nPass = $_POST['newPass'];
       $rPass = $_POST['rePass'];      
      if($nPass==$rPass){



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

      fwrite($myfile, $email.' '.$fName.' '.$dob.' '.$uName.' '.$nPass.' '.$Utype. " \r\n");
      fclose($myfile);
      echo  "Password Changed"."<a href='../php/Logout.php'>Login</a>";

    }
    else{
        echo "Password Not Matched <br> "."<a href='../php/userPassEdit.php'>Back</a>";
      }
}
else{
	echo "New Password fields are empty <br>"."<a href='../php/userPassEdit.php'>Back</a>";
}
}

?>