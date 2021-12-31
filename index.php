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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/fruits.jpg" alt="Image">
        <div class="carousel-caption">
          <h2 style="color: cyan;">We Are In Your Service</h2>
          
        </div>      
      </div>

      <div class="item">
        <img src="img/simple of shop.jpg" alt="Image">
        <div class="carousel-caption">
          <h2 style="color: cyan;">Quality Service Quality Product</h2>
          
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <a href="shop.php" class="btn btn-danger"style="margin-top: 10px;padding: 15px;">Shop Now</a>
  <div class="row"style="margin-top: 10px;">
    <div class="col-sm-4">
      <img src="img/troli.jpg" class="img-responsive" style="width:100%" alt="Image">
      
    </div>
    <div class="col-sm-4"> 
      
         
    </div>
    <div class="col-sm-4"> 
      <img src="img/troli.jpg" class="img-responsive" style="width:100%" alt="Image">
        
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Copyright &copy <a href="">Sylheti Online Shop</a> Store. All Rights Reserved.</p>
  <p>sylheti@gmail.com Or 01711111111</p>
</footer>

</body>
</html>
