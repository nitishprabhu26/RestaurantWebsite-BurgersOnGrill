<?php
// ob_start();

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
    session_unset();
session_destroy();
echo "<script type='text/javascript'>alert('You have successfully logged out. Thank you!');</script>";

header("Location: home.php");

?>