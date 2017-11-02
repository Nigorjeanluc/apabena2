<?php
$host='localhost';
$user='Nigorjeanluc';
$password='nigor210694';
$dbname='apabena_apabena';
$dbcon=mysqli_connect($host,$user,$password,$dbname);
if(mysqli_connect_errno())
	{
		die('Connection Failed!'.mysqli_connect_error());
	}
?>