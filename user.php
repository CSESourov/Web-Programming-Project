<?php
  include 'databaseConnect.php';
  session_start();
  if(!isset($_SESSION['email']) || !isset($_SESSION['password']))
  {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header("location: index.php");
  }
?>







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
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<body>
            <div class="container">
                <div class="jumbotron">
                    <h1>Happy Shopping!</h1>
                    
                </div>
              </div>
                        <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/chockes.jpg" style="width: 100%; height: 100px;" alt="chockes">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Chockes</h3>
                                    <p>Price:500/=</p>

                                    
                                        <p><a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                    
                                                
                                               
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/coffee.jpg" style="width: 100%; height: 100px;" alt="coffee">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Coffee</h3>
                                    <p>Price:500/=</p>
                                    
                                        <p><a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                    
                                                
                                               
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/juice.jpg" style="width: 100%; height: 100px;" alt="juice">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Juice</h3>
                                    <p>Price:500/=</p>
                                    
                                        <p><a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                    
                                                
                                               
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/icecream.jpg" style="width: 100%; height: 100px;" alt="icecream">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ice Cream</h3>
                                    <p>Price:500/=</p>
                                    
                                        <p><a href="cart_add.php?id=4" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                    
                                                
                                               
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/cocacola.jpg" style="width: 100%; height: 100px;" alt="cocacola">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Coca Cola</h3>
                                    <p>Price:500/=</p>
                                    
                                        <p><a href="cart_add.php?id=5" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                    
                                                
                                               
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                       <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/paste.jpg" style="width: 100%; height: 100px;" alt="paste">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Paste</h3>
                                    <p>Price:500/=</p>
                                    
                                        <p><a href="cart_add.php?id=6" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                    
                                                
                                               
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/oil.jpg" style="width: 100%; height: 100px;" alt="oil">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Oil</h3>
                                    <p>Price:500/=</p>
                                    
                                        <p><a href="cart_add.php?id=7" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                    
                                                
                                               
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/spice.jpg" style="width: 100%; height: 100px;" alt="spice">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Spice</h3>
                                    <p>Price:500/=</p>
                                    
                                        <p><a href="cart_add.php?id=8" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                    
                                                
                                               
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/package.jpg" style="width: 100%; height: 100px;" alt="package">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Package</h3>
                                    <p>Price:500/=</p>
                                    
                                        <p><a href="cart_add.php?id=9" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a></p>
                                    
                                                
                                               
                                    
                                </div>
                            </center>
                        </div>
                    </div>





                  </div>
                </div>
                    
            
          </body>
<br>

<footer class="container-fluid text-center">
  <p>Copyright &copy <a href="">Sylheti Online Shop</a> Store. All Rights Reserved.</p>
  <p>sylheti@gmail.com Or 01711111111</p>
</footer>

</body>
</html>
