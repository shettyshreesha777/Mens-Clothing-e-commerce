<?php
include("navbar.php");
?>
<html>
<head>
<style>
div.colors{
	display:none;
}
a:hover + div.colors{
	z-index:1;
	position:absolute;
	overflow:auto;
	display:inline-block;	
	heigth:400px;
	width:200px;
	background:rgba(2,0,0,0.5);

}
div.colors:hover{
	z-index:1;
	position:absolute;
	overflow:auto;
	display:inline-block;
	heigth:400px;
	width:200px;
	background:rgba(2,0,0,0.2);
}
div.brands
{
	display:inline-block;
	margin:20px;
	padding-top:50px;
	text-align:center;
	height:550px;
	width:320px;
	background:rgba(0,0,0,0.05);
	transition: all 0.3s ease-in-out;
}
div.brands:hover{
	background:rgba(0,0,0,0.3);
	height:580px;
	width:330px;
}
</style>
</head>
<body>
<br><br>
<div class="container-fluid">
  <?php
$conn = mysqli_connect('localhost','root','','ecommerce');
$x=$_GET['subcatid'];
$query="SELECT *
		FROM subcategory
		WHERE sid='$x'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
echo '<div style="text-transform:capitalize;">';
echo '<h1>'.$row["subcatname"].' for Men</h1>';
echo '</div>';
$query="SELECT *
		FROM item
		WHERE subcatid='$x'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
echo '<div class="brands" style="margin-left:30px;">
	  <a href="items.php?itemid='.$row['itemid'].'">';
echo '<img src='.$row["img1"].'height=300px width=250px style="border-radius:30px;padding-bottom:20px;">
	  </a>';
echo '<h5>'.$row["itemname"].'</h5>';
echo '<h6>Rs.'.$row["price"].'</h6>
	</div>';
}
	?>
</div>
</body>
</html>
<?php
include("footer.php");
?>
