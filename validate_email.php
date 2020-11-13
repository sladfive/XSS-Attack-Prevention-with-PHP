<?php

$validate_email=true;

include 'check_value.php';

 if (empty($_GET["email"])) {
   echo "Require Email on the field";
  } else {
    $email = val_input($_GET["email"]);
	
	$aus=$email;
	
	include 'blacklist.php';
	
	
	
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      
	  $validate_email=false;
	  
	  
	  
    } 
  }









   if ($validate_email==true) {
	   
	   if ($totale ==0) {
      
	  echo "Email $email is Well Formed! , $rischio ";
	  
	  } else {
		  
		  echo "Email is Well Formed! , $rischio ";
		  
	  }
	  
	  
    } else {
		
		if ($totale ==0) {
      
	  echo "Email $email is  NOT Well Formed! , $rischio ";
	  
	  } else {
		  
		  echo "Email is NOT Well Formed! , $rischio ";
		  
	  }
		
		
		
		
		
		
		
		
	}










?>

