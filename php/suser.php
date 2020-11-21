<!DOCTYPE html>
    		<html>
    		<head>
    			<title></title>
    			<style >
    		body {
			background-color: skyblue;
			height: 500px;
			
		}
		</style>
    		</head>
    		<body>
    		     <h1>
                    
<?php
session_start();
    $myfile = fopen("data-save.txt", "r");

    while($dt = fgets($myfile)){
    	$tst = explode('|', $dt);

    	if($tst[5] == "User"){
    		$_SESSION['fnm'] = $tst[0];
    		$_SESSION['em'] = $tst[1];
    		$_SESSION['db'] = $tst[2];
    		$_SESSION['un'] = $tst[3];
    		$_SESSION['pas'] = $tst[4];
    		$_SESSION['utyp'] = $tst[5];
    		$_SESSION['gen'] = $tst[6];

    		echo 'USER:'.'<br>' .'Full Name:-'.$_SESSION['fnm']. '<br>'. 'Email:-' .$_SESSION['em'].'<br>'. 'Date of Birth:-'.$_SESSION['db'].'<br>'. 'User Name:-'.$_SESSION['un'].'<br>'. 'Password:-'.$_SESSION['pas'].'<br>'. 'User Type:-'.$_SESSION['utyp'].'<br>'.'Gender:-'.$_SESSION['gen'].'<br>' ;
    	}
    	else{
    		echo "";
    	}
    }
 
 ?><BR>
    		     <a href="../view/admin_view.html">BACK</a>
    		     </h1>	 
    		</body>
    		</html>