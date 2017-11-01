<?php
$host='localhost';
$user='apabena_rw';
$password='nigor2106';
$dbname='apabena_apabena';
$dbcon=mysqli_connect($host,$user,$password,$dbname);
if(mysqli_connect_errno())
	{
		die('Connection Failed!'.mysqli_connect_error());
	}
?>