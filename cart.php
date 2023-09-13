<?php
include("navbar.php");
?>
<html>
<head>
<style>
.bb{
	margin-top: 200px;
	height:250px;
	width:800px;
	border:2px solid rgba(0,0,0,0.5);
}
</style>
</head>
<body>
<h3>Bag</h3>
<div class="container-fluid">
	<div class="container bb">
		  <?php
		  $conn = mysqli_connect('localhost','root','','ecommerce');
		  $x=$_GET['itemid'];
		  $query="SELECT *
		          FROM item
		          WHERE itemid='$x'";
			$result=mysqli_query($conn,$query);
			$row=mysqli_fetch_assoc($result);
			echo	'<img src='.$row["img1"].'height=200px width=100px >';
			echo '<h3>'.$row["brand"].'</h3>';
			echo '<h5>'.$row["itemname"].'</h5>';
			
			?>
	</div>
</div>
</body>
<footer>
<?php
include("footer.php");
?>
</footer>
</html>
