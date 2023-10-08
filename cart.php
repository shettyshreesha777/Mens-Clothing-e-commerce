<?php
include("navbar.php");
?>
<html>
<head>
<style>
.bb{
	margin: 50px;
	height:350px;
	width:800px;
	border:2px solid rgba(0,0,0,0.5);
}
.blocks{
	display:inline-block;
	margin:20px;
}
.nametext{
	margin-top:-100px;
}
.pricetext{
	margin-left:400px;
}
</style>
</head>
<body>
<h3>Bag</h3>
<div class="container-fluid">
		  <?php
		  $count=0;
		  $conn = mysqli_connect('localhost','root','','ecommerce');
		  $x=$_GET['cid'];
		  $query="SELECT *
		          FROM item, orders, customer
		          WHERE customer.cid='$x' AND orders.itemid=item.itemid";
			$result=mysqli_query($conn,$query);
			$rowcount=mysqli_num_rows( $result );
			echo '<h2 style="margin-top:50px; text-align:center;">'.$_SESSION["username"].'\'s Cart</h2>';
			echo '<h4 style="text-align:right;">Items in Cart: '.$rowcount.'</h4>';
			while($row=mysqli_fetch_assoc($result))
			{
			$oldprice=$row["price"]+1000;
			echo '<div class="container bb">';
			echo "<div class='blocks'>";
			echo	'<img src='.$row["img1"].'height=400px width=200px >';
			echo "</div>";
			echo "<div class='blocks nametext'>";
			echo '<h3>'.$row["brand"].'</h3>';
			echo '<h5>'.$row["itemname"].'</h5>';
			echo "<h5>Size: 44";
			echo "</div>";
			echo "<div class='blocks pricetext'>";
			echo "<h3 style='text-decoration:line-through; color:red; padding-left:130px;'>".$oldprice."</h3>";
			echo "<h5 style='display:inline-block;'>After Discount: </h5><h3 style='display:inline-block;'>".$row['price']."</h3>";
			echo "</div>";
			echo "</div>";				
			}
			?>
</div>
</body>
<footer>
<?php
include("footer.php");
?>
</footer>
</html>
