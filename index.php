<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<h2>PHP Form Validation Example ATTACK XSS SITE SCRIPTING</h2>


<h3>Validation Email</h3>

<form method="get" action="validate_email.php">  
  
  
  <input type="text" id="email" name="email" value="John"><br>
  


    <br><br>
  <input type="submit" name="submit" value="Submit">  
  
</form>


<h3>Validation Url</h3>

<form method="get" action="validate_url.php">  
  
  
  <input type="text" id="url" name="url" value="http://www.yoursite.com"><br>
  


    <br><br>
  <input type="submit" name="submit" value="Submit">  
  
</form>

<h3>Validation Name of Person</h3>

<form method="get" action="validate_text.php">  
  
  
  <input type="text" id="name" name="name" value="John"><br>
  


    <br><br>
  <input type="submit" name="submit" value="Submit">  
  
</form>



<h3>Validation Number</h3>

<form method="get" action="validate_number.php">  
  
  
  <input type="text" id="number" name="number" value="12131.1121564"><br>
  


    <br><br>
  <input type="submit" name="submit" value="Submit">  
  
</form>



</body>
</html>



