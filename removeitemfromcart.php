<?php
	$conn = mysqli_connect('localhost','root','','ecommerce');
	$x=$_GET['itemid'];
    $y=$_GET['cid'];
	$query="DELETE FROM orders
		    WHERE itemid='$x'";
	$result=mysqli_query($conn,$query);
    header('location: cart.php?cid='.$y.'');
?>