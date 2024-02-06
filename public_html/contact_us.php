<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Route UiTM and Ticket Booking</title>
	   <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="cssfile/footer_l.css">
    <link rel="stylesheet" a href="css\font-awesome.min.css">   
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <style type="text/css">

     
body {
    padding: 0;
    margin: 0;
    line-height: 1.5;
    box-sizing: border-box;
    color: rgba(248, 248, 248, 0.938);
    background: rgba(0, 0, 0, 0.5);
    background-image: url(image/7.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}


.container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 100vh;
}

.form-sections {
    display: flex;
    width: 30%;
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.Form-left, .Form-right {
    flex: 1;
    padding: 20px;
}

p {
    color: black;
}

.line {
    border-bottom: 2px solid #3498db;
    width: 50px;
}

span {
    display: block;
    margin-top: 10px;
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
<section id="fancy-form">
   <div class="container">
    <div class="form-sections">
      <div class="Form-left">
        <h1 style="color: black;">Contact Us</h1>
        <div class="line"></div> <!--border-bottom line-->
        <p>Contact us for latest news and updates. subscribe our news letter :)</p><br>

  
        <h4 style="color: black;">ADDRESS</h4>
         <p>UiTM Kelantan, Kampung Belukar, 18500 Machang, Kelantan</p>
         <hr><br><br>


        <h4 style="color: black;">PHONE</h4>
         <p>(+60) 012 7686 7890</p>
         <hr><br><br>


        <h4 style="color: black;">EMAIL</h4>
         <p>Route_UiTM@gmail.com</p>
         <hr> <br>

      </div>
    </div>
    </div>
</section>
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
