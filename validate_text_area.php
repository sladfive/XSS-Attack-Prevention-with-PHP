<?php

$validate_name=true;

include 'check_value.php';

 if (empty($_GET["name"])) {
    echo "Require Name on the field";
  } else {
    $name = val_input($_GET["Name"]);
	
	$aus=$name;
	
	include 'blacklist.php';
	
	
	
    // check if e-mail address is well-formed
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      
	  $validate_name=false;
	  
	  
	  
    } 
  }









   if ($validate_name==true) {
	   
	   if ($totale ==0) {
      
	  echo "Name $name has letters and white space allowed! , $rischio ";
	  
	  } else {
		  
		  echo "Name has letters and white space allowed! , $rischio ";
		  
	  }
	  
	  
    } else {
		
		if ($totale ==0) {
      
	  echo "Name $name  NOT has letters and white space allowed! , $rischio ";
	  
	  } else {
		  
		  echo "Name NOT has letters and white space allowed! , $rischio ";
		  
	  }
		
		
		
		
		
		
		
		
	}










?>