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

<?php

   if(isset($_REQUEST['remove']))
    {
         $id=$_REQUEST["title"];
         $sql ="DELETE FROM `user_item` WHERE item_id='$id'";

           mysqli_query($conn,$sql);

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
  .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
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
         <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        <li><a href="user.php"><span class="glyphicon glyphicon-user"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<body>
            <div class="container">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Item ID</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
                </thead>

              <tbody>

              <?php

              
                //$sql="SELECT * FROM `user`  WHERE `type`='user' Order by 'user_id'";
                $sql="SELECT * FROM `user_item` ORDER BY 'item_id'";
                $result=mysqli_query($conn,$sql);
              
                 $count=0;
                while($row = mysqli_fetch_array($result))
                {
                  $status=$row['status'];
                  if ($status == '1') {
                    $a='Active';
                    }
                  else{
                    $a='Inactive';
                  
                  }

                  $count++;
                
                 
                  

                  
    
              ?>

              <tr>
                <th><?php echo $row['item_id']; ?></th>
                <th><?php echo $row['price']; ?></th>
                
                
                <th>

                   <form method="post" action="cart.php">
                      <input type="hidden" name="title" value="<?php echo $row['item_id'];?>">
                
                      <button type="submit" class="btn btn-primary a-btn-slide-text btn-sm" name="remove" style="float: center;">Delete</button>
                      
                          
                      
                     
                    </form>

                    <button id="myBtn" style="color: white; background-color: #286090; background-repeat: no-repeat; border: inherit; margin-top: 5px;">Confirm Order</button>

<!-- The Modal -->
                            <div id="myModal" class="modal">

  <!-- Modal content -->
                              <div class="modal-content">
                              <span class="close">&times;</span>
                              <p>Your order confirmed successfully.Thank You.</p>
                              </div>

                          </div>

                  
                </th>
               
                  <?php } ?>
              </tr>
             
            </tbody>
          </table>
            </div>

          <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
            
          </body>
<br>

<footer class="container-fluid text-center" >
  <p>Copyright &copy <a href="">Sylheti Online Shop</a> Store. All Rights Reserved.</p>
  <p>sylheti@gmail.com Or 01711111111</p>
</footer>

</body>
</html>
