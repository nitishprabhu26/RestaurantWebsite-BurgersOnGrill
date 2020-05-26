<?php
include 'dbh.inc.php';
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
// ob_start();

$Lstatus = "";
	if(isset($_POST['login'])) {
	  $email = $_POST['email'];
	  $password = $_POST['password'];
      

	  if(empty($email) || empty($password) ) {
        $Lstatus = "Enter all the fields and try again";

	  } 
	  else {
	      $sql = "SELECT * from register_table where email='$email'";
          $result = mysqli_query($conn,$sql);
          $resultCheck = mysqli_num_rows($result);
          $row = mysqli_fetch_assoc($result);
	      if($resultCheck >0){
            if(strval($password)!= strval($row['password'])){
                $Lstatus = "Incorrect Password! Plesae try again";
            }else{
                $Lstatus = "You have successfully logged in";
                $_SESSION['email'] = $row['email'];
				$_SESSION['name'] = $row['full_name'];
                if($row['account_type'] == "admin")
                {
                    $_SESSION['acc_type'] = "admin";
                    header("Location: contact.php");

                }					
                else {
                    $_SESSION['acc_type'] = "nonadmin";
                    header("Location: home.php");

                }

            }
          }
          else{
            $Lstatus = "User doesnt exists. Please Register and try again!";
	    $full_name = "";
	    $email = "";
	    $password = "";
	    $re_password = "";
	    $address = "";
    	};

  }
  if(!!$Lstatus){
    echo "<script type='text/javascript'>alert('$Lstatus');</script>";

  }
}

?>