<?php
  include 'databaseConnect.php';
?>


<?php
    if(isset($_REQUEST['submit']))
    {
      $name= $_REQUEST["name"];
      $email=$_REQUEST["email"];
      $password=$_REQUEST["psw"];
      $repeat=$_REQUEST["repeat_password"];
      $phone=$_REQUEST["contract"];
      $city=$_REQUEST["city"];
      $address=$_REQUEST["address"];

      if ($password != $repeat) {
        header("location: signup.php");
        // echo '<p style="color:red;">password and confirm password should be same</p>';
      }
      else{
        $sql = "INSERT INTO `user`(`name`, `email`, `password`, `repeat_password`, `contract`, `city`, `address`) VALUES ('$name','$email','$password','$repeat','$phone','$city','$address')";
        mysqli_query($conn,$sql);
       
        
        
      }
      
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
  * {
  box-sizing: border-box;
}
.container {
  padding: 16px;
  background-color: white;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
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

<div>
  <form action="signup.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="email"><b>E-Mail</b></label>
    <input type="text" placeholder="Enter E-Mail" name="email" id="email" required>

    <label for="psw" style="margin-top: 2px;"><b>Password</b></label>
    <input type="password" placeholder="Password" name="psw" id="psw" required>

    <label for="repeat_password" style="margin-top: 2px;"><b>Repeat Password</b></label>
    <input type="password" placeholder="Password" name="repeat_password" id="psw" required>

    
     <label for="contract"><b>Contract</b></label>
    <input type="text" placeholder="Contract" name="contract" id="contract" required>

     <label for="city"><b>City</b></label>
    <input type="text" placeholder="city" name="city" id="city" required>

     <label for="address"><b>Address</b></label>
    <input type="text" placeholder="address" name="address" id="address" required>
    <hr>
    

    <button type="submit" class="registerbtn" name="submit">Register</button>
  </div>
  

</form>
</div>
  
<div class="container text-center">    
  
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
