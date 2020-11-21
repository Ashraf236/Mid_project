<?php
session_start();
if(isset($_SESSION['email'])) {
    session_destroy();
    echo "Logged Out";
    echo "<br><a href='../view/login.html'>Login</a>";
}else{
    header("location: login.html");
}
?>