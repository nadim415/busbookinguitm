<?php

$dbhost = "sql207.infinityfree.com";
$dbuser = "if0_35922759";
$dbpass = "busbooking2";
$dbname = "if0_35922759_busbooking";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
else{
}
?>