<?php
 session_start();

 include("php/config.php");
 if(!isset($_SESSION['valid'])){
  header("Location : login.php");
 }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styleHome.css" />
    <title>Home</title>
</head>
<body>
    <div class="navbarRestu">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="notWorking.php">Services</a></li>                 <!-- Not working yet -->
          <li><a href="notWorking.php">Contact</a></li>                  <!-- Not working yet -->
          <li>
            <div class="Btn">
              <?php
              $id = $_SESSION['Id'];
              $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

              while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Name'];
                $res_Email = $result['Email'];
                $res_Phone = $result['Phone'];
                $res_id = $result['Id'];
              }
              ?>
            <button><a href="php/logout.php">Log Out</a></button>
            </div>            
          </li>
        </ul>
      </div>
      <div class="containerRestu">
        <h1><em>Try your favourite food in your favourite Resturant...</em></h1>
        <input
          type="search"
          placeholder="Search for resturant, cuisine or dish"
        />
        <button id="searchRestu">
          <i class="fa-solid fa-search"></i>
        </button>
      </div>
  
      <div class="boxRestu">
        <div class="orderRestu">
          <p id="orderBoxRestu">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
            reprehenderit illum omnis cupiditate fugit blanditiis rerum molestias
            atque nemo voluptatibus!
            <img src="img/food.jpg" alt="food image"/>
            <button>Order now</button>
          </p>
        </div>
      </div>
      <div class="footer">
        <p>Copyright &copy; -- 2024 All right reserved</p>
      </div>
</body>
</html>