<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resturant Site</title>
    <link rel="stylesheet" href="CSS/style.css" />
    <script
      src="https://kit.fontawesome.com/437c001710.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <div class="navbarRestu">
      <ul>
        <li id="logoRestu">food</li>
        <li><a href="home.php">Home</a></li>
        <li><a>About</a></li>
        <li><a>Services</a></li>
        <li><a>Contact</a></li>
        <li>
          <button><a href="login.php">Login</a></button>
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
