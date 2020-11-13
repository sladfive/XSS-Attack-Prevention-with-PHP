<?php

$validate_number=true;

include 'check_value.php';

 if (empty($_GET["number"])) {
    echo "Require Name on the field";
  } else {
	  
	
	  
	  
    $number = val_input($_GET["number"]);
	
	
	
	
	$aus=$number;
	
	include 'blacklist.php';
	
	
	
    // check if e-mail address is well-formed
    if (!is_numeric($number)) {
      
	  $validate_number=false;
	  
	  
	  
    } 
  }









   if ($validate_number==true) {
	   
	   if ($totale ==0) {
      
	  echo "Value $number is a number! , $rischio ";
	  
	  } else {
		  
		  echo "Value is  a number! , $rischio ";
		  
	  }
	  
	  
    } else {
		
		if ($totale ==0) {
      
	  echo "Value $number is NOT a number!! , $rischio ";
	  
	  } else {
		  
		  echo "Value  is NOT  number! , $rischio ";
		  
	  }
		
		
		
		
		
		
		
		
	}










?>