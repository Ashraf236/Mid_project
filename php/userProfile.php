<?php
session_start();
if(isset($_SESSION['email'])) {
    echo "<h1>My Profile</h1>";
    echo "Hello ".$_SESSION['unm'];
    echo "<br>Welcome to our webpage.<br>";
    echo "Email : ".$_SESSION['email']."<br>";
    echo "Date Of Birth : ".$_SESSION['dob']."<br><br>";
   
      
}else{
    header("location: log.html");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Profile</title>
    <style >
        body{
            
            background-image: url("../pics/aaa.jpg");
            background-repeat: no-repeat;
            height: 500px;
            background-size: cover;
        }

h1{
    color:white;
}

    </style>
    </head>

    <form method="Post" action="../view/userEdit.html">
        <input type="submit" name="edit" value="Edit Profile">
    </form>      

</html>

<?php
   echo "<br><a href='../php/logout.php'>Logout</a>";
?>