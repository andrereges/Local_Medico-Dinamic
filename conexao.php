<?php
$host= 'localhost';
$user= 'root';
$pass= '';
$db= 'localmedico';

$mysqli= new mysqli($host, $user, $pass, $db);

if($mysqli -> connect_errno){
	echo "Falha na conex�o: (".$mysqli -> connect_errno.")".$mysqli-> connect_error;
}

?>
