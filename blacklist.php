<?php



/////////////////////////////////////////////////
//////////////////////////////////////////////////




$controllo[1]="select";
$risk[1]=10;


$controllo[2]="insert";
$risk[2]=10;

$controllo[3]="delete";
$risk[3]=10;

$controllo[4]="dump";
$risk[4]=10;


$controllo[5]="and";
$risk[5]=4;



$controllo[6]="or";
$risk[6]=4;


$controllo[7]="drop";
$risk[7]=10;



$controllo[8]="update";
$risk[8]=10;



$controllo[9]="script";
$risk[9]=10;



$controllo[10]="js";
$risk[10]=10;



$controllo[11]="http";
$risk[11]=0;



$controllo[12]="//";
$risk[12]=0;



$controllo[13]=":";
$risk[13]=0;



$controllo[14]="www";
$risk[14]=0;


$controllo[15]="load";
$risk[15]=6;



$controllo[16]="document";
$risk[16]=10;



$controllo[17]="cookie";
$risk[17]=10;



$controllo[18]="fromCharCode";
$risk[18]=10;


$controllo[19]="String.";
$risk[19]=10;


$controllo[20]="img";
$risk[20]=4;


$controllo[21]="src";
$risk[21]=4;


$controllo[22]="javascript";
$risk[22]=10;



$controllo[23]="lowsrc";
$risk[23]=4;



$controllo[24]="onmouseover";
$risk[24]=4;




$controllo[25]="onerror";
$risk[25]=4;


$controllo[26]="jav&#x09";
$risk[26]=10;


$controllo[27]="jav&#x0A";
$risk[27]=10;


$controllo[28]="ac&#x0D";
$risk[27]=10;



$controllo[29]="image";
$risk[29]=4;


$controllo[30]="vbscript";
$risk[30]=8;


$controllo[31]="onload";
$risk[31]=10;



$controllo[32]="iframe";
$risk[32]=10;



$controllo[33]="frameset";
$risk[33]=10;



$controllo[34]="EMBED";
$risk[34]=10;


$controllo[35]="for";
$risk[35]=4;




$controllo[36]="font";
$risk[36]=4;


$controllo[37]="expression";
$risk[37]=4;



$controllo[38]="prompt";
$risk[38]=4;



$controllo[39]="&#x3C;";
$risk[39]=10;


$controllo[40]="&#x73;";
$risk[40]=10;

$controllo[41]="&#x63;";
$risk[41]=10;


$controllo[42]="&#x72;";
$risk[42]=10;



$controllo[43]="&#x69;";
$risk[43]=10;


$controllo[44]="&#x70;";
$risk[44]=10;


$controllo[45]="&#x74;";
$risk[45]=10;


$controllo[46]="&#x3E;";
$risk[46]=10;



$controllo[47]="&#x61;";
$risk[47]=10;






$controllo[48]="&#x6C;";
$risk[48]=10;


$controllo[49]="&#x65;";
$risk[49]=10;




$controllo[50]="&#x72;";
$risk[50]=10;


$controllo[51]="&#x74;";
$risk[51]=10;

$controllo[52]="&#x28;";
$risk[52]=10;

$controllo[53]="&#x22;";
$risk[53]=10;


$controllo[54]="&#x78;";
$risk[54]=10;


$controllo[55]="&#x73;";
$risk[55]=10;


$controllo[56]="&";
$risk[56]=8;

$controllo[57]="<";
$risk[57]=4;


$controllo[58]=">";
$risk[58]=4;

$controllo[59]='"';
$risk[59]=4;


$controllo[60]="'";
$risk[60]=4;

$controllo[61]="div";
$risk[61]=8;

$controllo[62]="attr";
$risk[62]=8;

$controllo[63]="setInterval";
$risk[63]=10;

$controllo[64]="window";
$risk[64]=10;


$controllo[65]="createStatement";
$risk[65]=10;

$controllo[66]="location";
$risk[66]=10;

$controllo[67]="rel";
$risk[67]=8;

$controllo[68]="css";
$risk[68]=8;

$controllo[69]="import";
$risk[69]=8;

$controllo[70]="vbscript";
$risk[70]=10;

$controllo[71]="im\port";
$risk[71]=8;

$controllo[72]="ja\vasc\ript";
$risk[72]=10;

$controllo[73]="expr";
$risk[73]=8;

$controllo[74]="background";
$risk[74]=4;

$controllo[75]="x-scriptle";
$risk[75]=10;

$controllo[76]="OBJECT";
$risk[76]=10;

$controllo[77]="HREF";
$risk[77]=10;


$controllo[78]="&lt;";
$risk[78]=8;

$controllo[79]="&gt;";
$risk[79]=8;


$controllo[80]="&le;";
$risk[80]=8;



$controllo[81]="&ge;";
$risk[81]=8;



$controllo[82]="&amp;";
$risk[82]=8;



$controllo[83]="&quot;";
$risk[83]=8;


$controllo[84]="&cent;";
$risk[84]=8;



$controllo[85]="&pound;";
$risk[85]=8;


$controllo[86]="&euro;";
$risk[86]=8;

$controllo[87]="&copy;";
$risk[87]=8;

$controllo[88]="&#60;";
$risk[88]=8;

$controllo[89]="&#62;";
$risk[89]=8;

$controllo[90]="&#38;";
$risk[90]=8;

$controllo[91]="&#34;";
$risk[91]=8;

$controllo[92]="&#39;";
$risk[92]=8;



















$totc=87;


//////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////

$totale=0;


$mystring = $aus;
	
	

for ($i=1;$i<=$totc; $i++){
	
	
	
    $findme   =$controllo[$i];


     $pos      = strripos($mystring, $findme);

if ($pos === false) {
    //echo "Sorry, we did not find ($needle) in ($haystack)";
} else {
    
	
	$totale=$totale+$risk[$i];
	
	
}
	
	
	

	
	
}



if ($totale >=10) {
	
	
	$rischio="The risk of malicious code is high";
	
	
}



if ( ($totale >=5) and ($totale <10) ){
	
	
	$rischio="The risk of malicious code is medium to high";
	
	
}

if ( ($totale >0) and ($totale <5) ){
	
	
	$rischio="The risk of malicious code is medium to low";
	
	
}


if (  $totale == 0  ){
	
	
	$rischio="
The risk of malicious code is noone";
	
	
}


?>