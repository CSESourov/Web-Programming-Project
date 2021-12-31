<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sylheti Online Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    body{
      background-color: #E4E4E6;
    }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }

  .container {
  position: relative;
  text-align: center;
  color: #B53A4A;
}

.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}
.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

/* Bottom right text */


/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}





  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Sylheti Online Shop</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="about.php">About</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<body>
    <div class="container">
  <img src="img/wallpaper.jpg" alt="wallpaper" style="width:100%;">
  
  <div class="top-left"><h2>Hi</h2></div>
  <div class="top-right"><h2>Sir/Mam,</h2></div>
  
  <div class="centered"><h3>Our Activities</h3><br>
    <p>Online shopping is a form of electronic commerce which allows consumers to directly buy goods or services from a seller over the Internet using a web browser or a mobile app. Consumers find a product of interest by visiting the website of the retailer directly or by searching among alternative vendors using a shopping search engine, which displays the same product's availability and pricing at different e-retailers. As of 2020, customers can shop online using a range of different computers and devices, including desktop computers, laptops, tablet computers and smartphones.</p>

  </div>
</div>
               





            </body>

<footer class="container-fluid text-center">
  <p>Copyright &copy <a href="">Sylheti Online Shop</a> Store. All Rights Reserved.</p>
  <p>sylheti@gmail.com Or 01711111111</p>
</footer>

</body>
</html>
