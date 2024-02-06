<?php 
session_start();
ob_start();
include("connection.php");

if(isset($_POST['login'])){

        $query="SELECT * FROM `admin` WHERE username='$_POST[Admin_username]'  AND  password='$_POST[Admin_password]'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1){

         $_SESSION['username']=$_POST['Admin_username'];
         header("location:adminDash.php");
         ob_end_flush();

        }
        else{
          echo '<script type="text/javascript">alert("incorrect_pass!!!")</script>';
        }
        
        

    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Route UiTM and Ticket Booking</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="cssfile/footer_l.css">
    <link rel="stylesheet" href="cssfile/login.css">
    <link rel="stylesheet" a href="css\font-awesome.min.css">   
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style type="text/css">


       body{
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                background-image: url(image/3.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;

            }
            .sign_up{

                font-size: 20px;

            }
            .sign_up:hover{

                background-color: #fff;
            }
            .login-box form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-box form .button-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: 10px;
        }

        .login-box form .back_button, .login-box form .login_button {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            padding: 5px 10px;
            border-radius: 5px;
            transition: color 0.3s ease-in-out;
        }

        .login-box form .back_button:hover, .login-box form .login_button:hover {
            color: cyan;
        }

    </style>

  </head>
  <body>

<div class="login-box">
    <img src="image/avatar.png" class="avatar">
    <h1>Admin Login</h1>
    <form method="POST">
        <p>Username</p>
        <input type="text" name="Admin_username" placeholder="Enter Username">
        <p>Password</p>
        <input type="password" name="Admin_password" placeholder="Enter Password">
        <div class="button-container">
            <input type="submit" name="login" value="Login" class="login_button">
        </div>
        <a href="loginMenu.php" class="back_button">Back to Login Menu</a>
    </form>
</div>


  </body>
</html>
