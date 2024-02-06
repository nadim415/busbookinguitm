<!DOCTYPE html>
<html>
<head>
	<title>Route UiTM and Ticket Booking</title>
    <link rel="stylesheet" href="cssfile/footer_l.css">
    <link rel="stylesheet" href="cssfile/login.css">
    <link rel="stylesheet" a href="css\font-awesome.min.css">
   
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

   <style>
   	     
   	     .box{
   	     	width: 500px;
		    height: 250px;
		    margin: auto;
		    margin-top: 70px;
   	     }
   	     .box1{

   	     	width:500px;
   	     	height: 122px;
   	     	border: 1px solid #fff;
   	     	background-color: rgba(1,3,0.3,0.5);
   	     	border-radius: 10px;

   	     }
   	     .box2{

   	     	width:500px;
   	     	height: 122px;
   	     	border: 1px solid #fff;
   	     	background-color: rgba(1,3,0.3,0.5);
   	     	border-radius: 10px;
   	     	margin-top: 5px;
   	     }
   	     .box1:hover{

   	     	cursor: pointer;
   	     	background-color: black;
   	     	color: #fff;
   	     }
   	     .box2:hover{
   	     	cursor: pointer;
   	     	background-color: black;
   	     	color: #fff;
   	     }
   	     .loginMenu{
   	     	text-align: center;
   	     	color: #fff;
   	     	font-size: 38px;
   	     }
        body {
        background-image: url(image/5.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        margin: 0;
        }
        .menu{

            color: #fff;
            text-align: center;
            text-decoration: none;
            margin-top: 43px;

        }
        .menu:hover{
            color: #00999c;
            font-size: 36px;
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

    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer.css">



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


    <h1 class="loginMenu">LOGIN MENU</h1>

    <div class="box">

        <a href="Login.php">

                <div class="box1">

                    <h1 class="menu">User Login</h1>

                </div>
        </a>

        <a href="adminLogin.php">

                <div class="box2">

                    <h1 class="menu">Admin Login</h1>


                </div>

        </a>



    </div>



</body>
</html>