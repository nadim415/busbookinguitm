
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script>
        function redirectToContactUs() {
            window.location.href = "contact_us.php";s
        }
    </script>  
    <style>

        .unique-text {
            transition: color 0.5s ease-in-out;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function getRandomColor() {
                var letters = "0123456789ABCDEF";
                var color = "#";
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }

            var aboutText = document.querySelector(".text");

            function changeTextColor() {
                var randomColor = getRandomColor();
                aboutText.style.color = randomColor;
            }

            aboutText.addEventListener("click", function () {
                changeTextColor();
            });

        });
    </script>

    <style type="text/css">


    body {
                    margin: 0;
                    padding: 0;
                    width: 100%;
                    height: 100%;
                    background-image: url(image/2.jpg);
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
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
    *{
        font-family: 'P  color: #545454;oppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .about {
        background: url(image/10.jpg) no-repeat left;
        background-size: 55%;
        background-color: rgba(0, 0, 0, 0.5);
        overflow: hidden;
        padding: 100px 0;
    }

    .inner-section{
        width: 55%;
        float: right;
        background-color: #fdfdfd;
        padding: 140px;
        box-shadow: 10px 10px 8px rgba(0,0,0,0.3);
    }
    .inner-section h1{
        margin-bottom: 30px;
        font-size: 30px;
        font-weight: 900;
        color: #545454;
        
    }
    .text{
        font-size: 17px;
        color: #545454;
        line-height: 30px;
        text-align: justify;
        margin-bottom: 40px;
    }
    .skills button{
        font-size: 22px;
        text-align: center;
        letter-spacing: 2px;
        border: none;
        border-radius: 20px;
        padding: 8px;
        width: 200px;
        background-color: #00999c;
        color: white;
        cursor: pointer;
    }
    .skills button:hover{
        transition: 1s;
        background-color: #ecf5f5;
        color: #00999c;
    }
    @media screen and (max-width:1200px){
        .inner-section{
            padding: 80px;
        }
    }
    @media screen and (max-width:1000px){
        .about{
            background-size: 100%;
            padding: 100px 40px;
        }
        .inner-section{
            width: 100%;
        }
    }

    @media screen and (max-width:600px){
        .about{
            padding: 0;
        }
        .inner-section{
            padding: 60px;
        }
        .skills button{
            font-size: 19px;
            padding: 5px;
            width: 160px;
        }
    }

    table
    {
        width:99%;
        border-collapse: separate !important;
        margin:auto;
        text-align:center;
        margin-top:50px;
        background-color: rgb(255, 255, 255);
        border-radius: 10px 10px 0px 0px;

    }
    table th
    {
        border-bottom:2px solid rgb(187, 187, 187);
        padding:10px 0px 10px 0px;
        font-family: "balsamiq_sansitalic" !important;
        color: black;
    }
    table tr td
    {
        border-right: 2px solid rgb(187, 187, 187);
        height: 58px;
        padding: 22px 0px 0px 0px;
        font-family: "monospace;" !important;
        border-bottom: 2px solid rgb(187, 187, 187);
        font-size: 22px;
        color: black;
    }
    table tr td a
    {
        background-color: rgb(255, 196, 0);
        color: black;
        border-radius: 5px;
        padding: 6px;
        text-decoration: none;
        margin: 10px;
        font-weight: 700;
    }

    table tr td button:hover
    {


        padding: 5px 5px 5px 5px;
        border: 2px solid yellow;
        border-radius: 7px;
        background-color: red;
        color: white;
        cursor: pointer;
    }
    .topic_bus{
        text-align: center;
        color: #fff;
    }

    .about-intro {
        max-width: 600px;
        margin: auto;
        text-align: center;
        padding: 20px;
        border: 2px solid #000000;
        border-radius: 10px;
        background-color: #00999c;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
    }

    .about-intro p {
        margin-bottom: 15px;
        font-size: 16px;
        line-height: 1.6;
    }
     @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap');
    *{
    margin: 0;
    padding: 0;
    color: #f2f2f2;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
    }
    nav{
    background: #222222;
    padding: 10px 40px 10px 70px;
    border: 1px solid #000;
    border-left: none;
    border-right: none;
    }
    nav ul{
    display: flex;
    list-style: none;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    }
    nav ul li.logo{
    flex: 1;
    font-size: 30px;
    font-weight: 700;
    }
    nav ul div.items{
    padding: 0 25px;
    display: inline-flex;
    }
    nav ul div.items a{
    text-decoration: none;
    font-size: 18px;
    padding: 0 12px;
    }
    nav ul div.items a:hover{
    color: cyan;
    }
    nav ul .search-icon{
    height: 40px;
    width: 240px;
    display: flex;
    background: #f2f2f2;
    border-radius: 5px;
    }
    nav ul .search-icon input{
    height: 100%;
    width: 200px;
    border: none;
    outline: none;
    padding: 0 10px;
    color: #000;
    font-size: 16px;
    border-radius: 5px 0 0 5px;
    }
    nav ul .search-icon .icon{
    height: 100%;
    width: 40px;
    line-height: 40px;
    text-align: center;
    border: 1px solid #cccccc;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
    }
    nav ul .search-icon .icon:hover{
    background: #e6e6e6;
    }
    nav ul .search-icon .icon span{
    color: #222222;
    font-size: 18px;
    }
    nav ul li.btn{
    font-size: 29px;
    flex: 1;
    padding: 0 40px;
    display: none;
    }
    nav ul li.btn span{
    height: 42px;
    width: 42px;
    text-align: center;
    line-height: 42px;
    border: 1px solid #151515;
    border-radius: 5px;
    cursor: pointer;
    }
    nav ul li.btn span.show:before{
    content: '\f00d';
    }
    @media screen and (max-width: 1052px) {
    nav{
        padding: 10px 40px 10px 0px;
    }
    nav ul li.logo{
        display: none;
    }
    nav ul div.items{
        flex: 4;
    }
    }
    @media screen and (max-width: 800px){
    nav ul li.btn{
        display: block;
    }
    nav{
        z-index: 1;
        padding: 9px 40px 9px 0;
    }
    nav ul div.items{
        z-index: -1;
        position: fixed;
        top: -220px;
        right: 0;
        width: 100%;
        background: #222222;
        display: inline-block;
        transition: top .4s;
    }
    nav ul div.items.show{
        top: 60px;
    }
    nav ul div.items li{
        text-align: center;
        line-height: 30px;
        margin: 30px 0;
    }
    nav ul div.items li a{
        font-size: 19px;
    }
    }
    @media screen and (max-width: 405px) {
    nav ul{
        flex-wrap: nowrap;
    }
    nav ul li.search{
        width: 50vmin;
    }
    nav ul li input{
        width: 40vmin;
    }
    nav ul li .search-icon{
        width: 10vmin;
    }
    }
    .content{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    width: 100%;
    padding: 0 40px;
    z-index: -2;
    }
    .content .text{
    font-size: 40px;
    font-weight: 800;
    padding: 5px 0;
    color: #202020;
    }
    .content .p{
    font-size: 28px;
    font-weight: 600;
    color: #202020;
    }      
    </style>

  </head>
  <body>

    <nav>
    <ul>
        <li class="logo"><h4>Route UiTM</h4></li>
        <li class="btn"><span class="fas fa-bars"></span></li>
        <div class="items">
          <li><a href="home.php">Home</a></li>
          <li><a href="help.php">Help</a></li>
          <li><a href="loginMenu.php">Login</a></li>
          <li><a href="AboutUs.php">About Us</a></li>
           <li><a href="contact_us.php">Contact Us</a></li>
            <li><a href="slide.php">Services</a></li>
        </div>
    </ul>
    </nav>


    <div class="about-sec">
        <div class="about">
            <div class="inner-section">
                <h1>About Us</h1>
                <p class="text">
                Route UiTM is your trusted partner for convenient and reliable bus transportation services.
                We are committed to providing a seamless ticketing experience for UiTM students, faculty, and staff.
                </p>
			    <p class="text">
               Our mission is to enhance the commuting experience by offering a modern, efficient, and user-friendly
               ticketing system. With Route UiTM, you can easily plan your journeys, reserve bus tickets, and enjoy
               comfortable rides to your destination.
                </p>
                <div class="skills">
                <button onclick="redirectToContactUs()">Contact Us</button>
            </div>

        </div>
    </div>
    
<?php include("connection.php");?>

<h1 class="topic_bus"> ...Our Buses...</h1>

    <?php
   
        $sqlget="SELECT * FROM bus";
        $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    
        echo "<table>";
        echo"<tr>
                <th>ID</th>
                <th>bus_name</th>
                <th>Tel Number</th>
       
            </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['Bus_Name'];
        echo "</td><td>";
        echo $row['Tel'];
        echo "</td>";
        
       
          
    ?>

       

    </tr>

    <?php
       }

        echo "</table>";


    ?>
    <h1 class="topic_bus"> ...Our Route Services...</h1>

    <?php

    
        $sqlget="SELECT * FROM route";
        $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

        echo "<table>";
        echo "<tr>
            <th>ID</th>
            <th>Via City</th>
            <th>Destination</th>
            <th>Bus Name</th>
            <th>Departure Date</th>
            <th>Departure Time</th>
            <th>Cost</th>
  
   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['via_city'];
        echo "</td><td>";
        echo $row['destination'];
        echo "</td><td>";
        echo $row['bus_name'];
        echo "</td><td>";
         echo $row['departure_date'];
        echo "</td><td>";
         echo $row['departure_time'];
        echo "</td><td>";
         echo $row['cost'];
        echo "</td>";
          
    ?>

    </tr>

    <?php
        }

        echo "</table>";


    ?>

    <div style="margin-top: 30px;"></div>

    <div class="about-sec">
        <div class="about-img"></div>
        <div class="about-intro">
            <p>Plan your trip, reserve bus tickets, and arrive at your destination</p>
            <p>We present a comprehensive online bus booking platform designed exclusively for UiTM students. Seamlessly reserve and secure your bus seats through our user-friendly systemn.</p>
        
    </div>
    
    <div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank"               class="w3-hover-opacity"></a></p></div>

    <script>
        $(document).ready(function() {
            $('nav ul li.btn span').click(function(){
                $('nav ul div.items').toggleClass("show");
                $('nav ul li.btn span').toggleClass("show");
            });
        });
    </script>


  </body>
</html>
