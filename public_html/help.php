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

	   
   </style>
  
</head>
<body class="help-center-body">


            <?php include("nav.php");
             ?>	
 

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


</body>
</html>



