<?php
include 'dbh.inc.php';
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
	$feedbackArray=[];

if(isset($_SESSION['email'])){

	if($_SESSION['acc_type'] === "admin"){
		$email= $_SESSION['email'];
		$sql = "SELECT * from contact_table ";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);
		if($resultCheck >0){
			$feedbackArray= mysqli_fetch_all($result,MYSQLI_ASSOC);
		}
		mysqli_free_result($result);
	}
}

$Cstatus = "";
	if(isset($_POST['contact'])) {
	  $name = $_POST['name'];
	  $email = $_POST['contact_email'];
	  $subject = $_POST['subject'];
	  $message = $_POST['message'];
      


	  if(empty($name) || empty($email) || empty($subject) ||empty($message)) {
	    $Cstatus = "All fields are compulsory. Please fill all the fields to procede";
	  } 
	  else {
	    $sql = "INSERT INTO contact_table (name, email, subject, message ) VALUES ('$name', '$email', '$subject', '$message');";
        mysqli_query($conn, $sql);
		$Cstatus = "Successfully submitted. Thank you!";
	    $name = "";
	    $email = "";
	    $subject = "";
	    $message = "";
    	};

  }
  if(!!$Cstatus){
	echo "<script type='text/javascript'>alert('$Cstatus');</script>";
  }


?>