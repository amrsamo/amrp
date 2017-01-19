<?php 

$HTTP_HOST = $_SERVER['HTTP_HOST'];

if($HTTP_HOST == 'localhost')
{
	//Development
	$servername = 'localhost';
	$username = 'root';
	$password = 'root';
	$dbname = 'amrp';
}
else
{
	//Production
	$servername = 'localhost';
	$username = 'root';
	$password = ".?R](%B=<NE,6'g";
	$dbname = 'amrp';
}

 ?>