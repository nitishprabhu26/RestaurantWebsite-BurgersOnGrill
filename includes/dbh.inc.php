<?php

//UTA CLOUD
// $dbServername = "localhost";
// $dbUsername = "npk8851_user";
// $dbPassword = "j;sx7*7PCahc";
// $dbName = "npk8851_wdm_database";

//LOCALHOST
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "wdm_database";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(!$conn){

  die("Connection Failed: ".mysql_connect_error());
  echo "error in connection";
}

 ?>
