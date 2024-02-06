<?php 
session_start();

  include("connection.php");
  include("function.php");

  $user_data = check_login($conn);

?>

<?php include("connection.php")?>
<!DOCTYPE html>
<html>
<head>
  <title>Route UiTM and Ticket Booking</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
  <style type="text/css">

      body{

      background-image: url("image/1.jpg");
      background-position: center;
      background-size: cover;
      height: 700px;
      background-repeat: no-repeat;
      background-attachment: fixed;

    }
    .adminTopic{
      text-align: center;
      color: #fff;
      

    }

table {
    width: 100%;
    border-collapse: collapse;
    margin: auto;
    text-align: center;
    margin-top: 50px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

table th {
    border-bottom: 2px solid #ddd;
    padding: 15px 0;
    font-family: "balsamiq_sansitalic";
    background-color: #f8f8f8;
}

table tr td {
    border-bottom: 2px solid #ddd;
    border-right: 2px solid #ddd;
    height: 58px;
    padding: 20px 0;
    font-family: "monospace";
    font-size: 18px;
}

table tr:last-child td {
    border-bottom: none;
}

table tr td a {
    background-color: #3498db;
    color: #fff;
    border-radius: 5px;
    padding: 12px 18px;
    text-decoration: none;
    margin: 10px;
    font-weight: 700;
    display: inline-block;
    transition: background-color 0.3s;
}

table tr td button:hover {
    padding: 12px 18px;
    border: 2px solid #ffcc00;
    border-radius: 7px;
    background-color: #ff6666;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

button 
{
    padding: 5px 5px 5px 5x;
}
.btnPolicy{

  padding: 5px 5px 5px 5px;
  border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    margin-left: 20px;
}

.btnPolicy:hover{

  background:red;
    padding: 7px 7px 7px 7px;
    cursor: pointer;

}


  </style>
</head>
<body>
  <input type="checkbox" id="check">

  <label for="check">
<i class="fa fa-bars" id="btn"></i>
<i class="fa fa-times" id="cancle"></i>


  </label>
  <div class="sidebar">
<header>
<p><?php echo $user_data['username'];?></p>
</header>
<ul>


    <li><a href="viewBus.php">Ticket Booking</a></li>
    <li><a href="profile.php">Profile</a></li>

    <li><a href="logout.php">logout</a></li>
    </ul>
   

</div>



<div class="sidebar2">


    <h1 class="adminTopic">Booking Your Ticket...</h1>


<?php

    
    $sqlget="SELECT * FROM route";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>ID</th>
    <th>Board Place</th>
    <th>Destination</th>
    <th>Bus Name</th>
    <th>Departure Date</th>
    <th>Departure Time</th>
    <th>Cost</th>
    <th>Booking</th>
    
   
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

        <td>
    <button style="border:2px solid yellow; border-radius:7px; background-color:red;color:white;">
        <a href="AddBooking.php?id=<?php echo $row['id'];?>">
            Book Now
        </a>
    </button>
</td></tr>

<?php
       }

       echo "</table>";


?>






</div>
<div><class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"><a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity"></a></p></div>
</body>
</html>