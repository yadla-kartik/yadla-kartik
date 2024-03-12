<?php
$servername='localhost';
$username='root';
$password='';
$database_name='contact';

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!($conn))
{
	die("could not connect to contact:".mysqli_error());
	
}
else{
	echo("connection established to database contact");
}
?>