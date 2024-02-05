<?php

session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}
echo ("<script LANGUAGE='JavaScript'>
    window.alert('User Logged Out');
    window.location.href='home.php';
    </script>");

die;
?>