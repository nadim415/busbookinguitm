<?php

session_start();

if(isset($_SESSION['username']))
{
	unset($_SESSION['username']);

}

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Admin Logged Out');
    window.location.href='loginMenu.php';
    </script>");
die;
?>