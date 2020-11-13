<?php

$validate_url=true;

include 'check_value.php';

 if (empty($_GET["url"])) {
    echo "Require Url on the field";
  } else {
    $url = val_input($_GET["url"]);
	
	$aus=$url;
	
	include 'blacklist.php';
	
	
	
    // check if e-mail address is well-formed
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
      
	  $validate_url=false;
	  
	  
	  
    } 
  }









   if ($validate_url==true) {
	   
	   if ($totale ==0) {
      
	  echo "Url $url is well formed! , $rischio ";
	  
	  } else {
		  
		  echo "Url  is Well Formed! , $rischio ";
		  
	  }
	  
	  
    } else {
		
		if ($totale ==0) {
      
	  echo "Url $url is  NOT Well Formed! , $rischio ";
	  
	  } else {
		  
		  echo "Url is NOT Well Formed! , $rischio ";
		  
	  }
		
		
		
		
		
		
		
		
	}










?>