<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route UiTM and Ticket Booking</title>
	   <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="cssfile/footer.css">
   <link rel="stylesheet" type="text/css" href="cssfile/videoedit.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


   <style type="text/css">
       body{
        background-image: url(image/4.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
       }

body {
  background-image: url("image/4.jpg");
  font-family: monospace;
  background-size: cover;
  background-attachment: fixed;
  margin: 0; 
  padding: 0;
}


.wrapper {
  width: 30%;
  margin: 2% auto;
  background: rgba(255, 255, 255, 0.8); 
  padding: 20px;
  border-radius: 15px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.wrapper h2 {
  text-transform: uppercase;
  font-family: 'Poppins',
  font-weight: bold;
  text-align: center;
  font-size: 3em; 
  color: #0b032b;
  margin-bottom: 10px;
}

.single-service {
  position: relative;
  width: calc(30% - 40px);
  height: 330px;
  background: #fff;
  box-sizing: border-box;
  padding: 0 15px;
  transition: 0.5s;
  overflow: hidden;
  margin: 0 auto; 
  text-align: center;
  border-radius: 15px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  margin-bottom:2%;
}

.single-service:hover {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
}

.single-service h3 {
  font-size: 1.5em;
  text-transform: uppercase;
  font-family: 'Poppins', sans-serif;
  letter-spacing: 1px;
  color: #000;
  margin-top: 20px;
}

.single-service p {
  color: #262626;
  font-size: 1em;
  font-family: 'Times New Roman', Times, serif;
  margin-top: 20px;
}

.help {
  width: 60px;
  height: 60px;
  background: #00755E;
  border-radius: 50%;
  margin: 5% auto;
}

.help i {
  font-size: 30px;
  padding: 15px;
  color: #fff;
}

.single-service span {
  position: absolute;
  top: 0;
  left: -110%;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
  transition: 0.7s;
  transform: skewX(10deg);
}

.single-service:hover span {
  left: 110%;
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
<body class="help-center-body">

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


 

      <div class="wrapper">
	  
        <h2>HELP CENTER</h2>
      <div class="line">
      </div>
      </div>

      <div class="single-service">
            <div class="help">
         <i class="fa fa-search"></i></div>
        <span></span>
             <h3>Customer Support</h3><br><br>
      <p>

        We help you to make your<br> journey better.</p>
      </div>


      <div class="single-service">
            <div class="help">
      <i class="fa fa-headphones"></i></div>
      <span></span>
             <h3>More Choices</h3><br><br>
      <p>

        We give you maximum choices across<br> all the routes to choose your bus.</p>
      </div>


      
      <div class="single-service">
        <div class="help">
  <i class="fa fa-map-marker"></i></div>
  <span></span>
         <h3>Google Map Location</h3><br><br>
  <p>We will send you the boarding place and destination
    <br>place link in google map<br>
     </p>
  </div>

  
 
<script src="js/mystyle.js"></script>
<script>        $(document).ready(function() {
            $('nav ul li.btn span').click(function(){
                $('nav ul div.items').toggleClass("show");
                $('nav ul li.btn span').toggleClass("show");
            });
        });</script>


</body>
</html>



