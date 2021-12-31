<?php
	require 'databaseConnect.php';
    //require 'header.php';
    session_start();
    $item_id=$_GET['id'];
    $id=$_SESSION['email'];
    $price=$_REQUEST['price'];
    $add_to_cart_query="INSERT INTO `user_item`(`user_id`, `item_id`, `status`) VALUES ('$id','$item_id','Added to cart')";
    $add_to_cart_result=mysqli_query($conn,$add_to_cart_query) or die(mysqli_error($conn));

    header('location: user.php');
?>

<?php

	if ('`item_id`=1' AND '`user_id`=$id' ) {
		$sql="UPDATE `user_item` SET `price`='500' WHERE `price`='$price' ";
		$sql_result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
		
	}
	

	
?>
