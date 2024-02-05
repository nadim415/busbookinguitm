<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Route UiTM and Ticket Booking</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="cssfile/footer.css">
   <link rel="stylesheet" type="text/css" href="cssfile/videoedit.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style type="text/css">

      body{


           background-image: url(image/1.jpg);
           background-size: cover;
          background-repeat: no-repeat;
          background-attachment: fixed;





      
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                background-color: black;
            }
              #container{

                height: 100vh;
                width: 100%;
                background-image: url(image/3.jpg);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                transition: 2s;
                font-family: cursive;
                animation-name: animate;
                animation-direction: alternate-reverse;
                animation-duration: 40s;
                animation-fill-mode: forwards;
                animation-iteration-count: infinite;
                animation-play-state: running;
                animation-timing-function: ease-in-out;


            }

            @keyframes animate{

                0%{
                    background-image: url(image/1.jpg);
                }
                10%{
                    background-image: url(image/2.jpg);
                }
                20%{
                    background-image: url(image/3.jpg);
                }
                30%{
                    background-image: url(image/4.jpg);
                }
                40%{
                    background-image: url(image/5.jpg);
                }
                50%{
                    background-image: url(image/6.jpg);
                }
                60%{
                    background-image: url(image/7.jpg);
                }
                70%{
                    background-image: url(image/8.jpg);
                }
                80%{
                    background-image: url(image/9.jpg);
                }
                90%{
                    background-image: url(image/10.jpg);
                }
                100%{
                    background-image: url(image/1.jpg);
                }


            }
        .home_details {
            color: #fff;
            font-family: monospace;
            font-size: 74px;
            padding: 162px 5px 5px 185px;
            position: relative;
        }

        .font {
            color: #00999c;
        }

        .btnHome {
            background-color: #00999c;
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }


    </style>
	    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var homeDetails = document.querySelector(".home_details");
            homeDetails.style.opacity = 0;
            setTimeout(function () {
                homeDetails.style.transition = "opacity 1s";
                homeDetails.style.opacity = 1;
            }, 500);

            // Add hover effect on the SIGN UP NOW button
            var btnHome = document.querySelector(".btnHome");
            btnHome.addEventListener("mouseover", function () {
                btnHome.style.backgroundColor = "#fff";
                btnHome.style.color = "#00999c";
            });
            btnHome.addEventListener("mouseout", function () {
                btnHome.style.backgroundColor = "#00999c";
                btnHome.style.color = "#fff";
            });
        });
    </script>

  </head>
  <body>



  <div id="container">

            <?php include("nav.php");
             ?>
             
    <h1 class="home_details">Your Smart Choice for UiTM Bus Transport<br><font class="font">Anywhere</font>
        <br>
        <a href="signUp.php"><button class="btnHome">SIGN UP NOW</button></a>
    </h1>

  </div>

 <div class="section">

                      <video autoplay loop muted class="section">
                        
                                  <source src="video/busvideo.mp4" type="video/mp4">

                      </video>


</div>
            <?php include("footer.php");
             ?>



  </body>
</html>
