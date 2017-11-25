<?php
#Write a PHP program to store current date-time in a COOKIE and display the ‘Last visited on’ 
#date-time on the web page upon reopening of the same page.
if(isset($_COOKIE['datee']))
{
	
	$cookieData = $_COOKIE['datee'];
}
$todayh = getdate();

$d = $todayh['mday'];
$m = $todayh['mon'];
$y =  $todayh['year'];

$hr = $todayh['hours'];
$mi = $todayh['minutes'];
$sec = $todayh['seconds'];


$datestring = "$d - $m - $y, $hr:$mi:$sec"; 
setcookie("datee", $datestring);
echo "<br> Hello! Last visted date: ".$cookieData."<br>";
//echo "Time of last visted: ".$hr.":".$mi.":".$sec."<br>";
?> 