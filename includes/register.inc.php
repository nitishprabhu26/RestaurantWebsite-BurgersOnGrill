<?php
include 'dbh.inc.php';

$Rstatus = "";
	if(isset($_POST['register'])) {
	  $full_name = $_POST['full_name'];
	  $email = $_POST['email'];
	  $password = $_POST['password'];
	  $re_password = $_POST['re_password'];
	  $address = $_POST['address'];
      $account_type = "nonadmin";
      


	  if(empty($full_name) || empty($email) || empty($password) ||empty($re_password) || empty($address) ) {
	    $Rstatus = "All fields are compulsory. Please fill all the fields to procede";
	  } 
	  else {
	      $sql = "SELECT * from register_table WHERE email='$email'";
          $result = mysqli_query($conn,$sql);
          $resultCheck = mysqli_num_rows($result);
	      if($resultCheck >0){
	      	$Rstatus = "User already exists with a same Email. Please use a different Email";
          }
          else{

	      $sql = "INSERT INTO register_table (full_name, email, password, re_password, address, account_type ) VALUES ('$full_name', '$email', '$password', '$re_password', '$address', '$account_type');";
          mysqli_query($conn, $sql);
		  $Rstatus = "Successfully registered! Try Logging in";
		  
			// SMTP Mailer
		  	$msg = "First line of text\nSecond line of text";
			// use wordwrap() if lines are longer than 70 characters
			$msg = wordwrap($msg,70);

			// send email
			// $headers = "From:nitish.prabhu26@gmail.com".$email; 

			mail($email,"My subject",$msg);

	    $full_name = "";
	    $email = "";
	    $password = "";
	    $re_password = "";
	    $address = "";
    	};

  }
  if(!!$Rstatus){
	echo "<script type='text/javascript'>alert('$Rstatus');</script>";
  }

}

?>