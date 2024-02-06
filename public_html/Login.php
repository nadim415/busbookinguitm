<?php
ob_start();
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Include necessary files
include("connection.php");
include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            $query = "select * from users where username = '$user_name' limit 1";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {

                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location:viewBus.php");
                        die;ob_end_flush();
                    }
                }
            }
            
            echo "wrong username or password!";
        }else
        {
            echo "wrong username or password!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Route UiTM and Ticket Booking</title>
    <link rel="stylesheet" href="cssfile/footer_l.css">
    <link rel="stylesheet" href="cssfile/login.css">
    <link rel="stylesheet" a href="css\font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" >
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    


    <style>


       body{
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                background-image: url(image/uitmbus2.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;

            }
            .sign_up{

                font-size: 20px;

            }
            .sign_up:hover{

                background-color: #00008B	;
                

            }
            .login-box form {
            display: flex;
            flex-direction: column;
            align-items: left;
            }

            .login-box form .button-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: 10px;
            }

            .login-box form .back_button, .login-box form .signup_button {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            padding: 5px 10px;
            border-radius: 5px;
            transition: color 0.3s ease-in-out;
            }

            .login-box form .back_button:hover, .login-box form .signup_button:hover {
            color: cyan;
            }
     

      
    </style>

  </head>
  <body>

<div class="login-box">
    <img src="image/Logo.jpg" class="avatar">
    <h1>Login Route UiTM</h1>
    <form method="post">
        <p>Username</p>
        <input type="text" name="user_name" placeholder="Enter Username">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="login" value="Login">
        <div class="button-container">
            <a href="signUp.php" class="signup_button">Sign Up</a>
            <a href="loginMenu.php" class="back_button">Back to Login Menu</a>
        </div>
    </form>
</div>

</body>
</html>