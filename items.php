<?php
include("navbar.php");
?>
<html>
<head>
<style>
div.rr{
	display: grid; 
	grid-template-columns:auto 1fr 4fr;
	padding-top:100px;
	padding-bottom:50px;
	padding-left:20px;
}

div.desc{
	width:500px; 
	height:auto;
}
.itemsize{
	display:inline-block;
	padding:12.5px;
	margin-left:20px;
	width:50px;
	height:50px;
	border:2px solid grey;
	border-radius:500px;
}
.itemsize:hover{
		border:2px solid red;

}
div.catg{
	height:280px;
	width:250px;
	display:inline-block;
	margin:20px;
	padding-top:50px;
	text-align:center;
	transition: all 0.3s ease-in-out;
}
div.catg:hover{
	background:rgba(0,0,0,0.3);
	height:300px;
	width:260px;
}
</style>
</head>
<body>
<?php
$conn = mysqli_connect('localhost','root','','ecommerce');
$x = $_GET['itemid'];
$query="SELECT *
		FROM item,subcategory
		WHERE itemid='$x' AND item.subcatid=subcategory.sid ";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
echo '<div class="container-fluid rr">
<div class="container">';
//echo	'<img src="item1.jpg" height=600px width=450px >';
echo	'<img src='.$row["img1"].'height=600px width=450px >';
echo '</div>';
echo '<div class="container">';
echo	'<img src='.$row["img2"].'height=600px width=450px >	
</div>';

echo '<div class="container desc">
		<h3>'.$row["brand"].'</h3>
		<h5>'.$row["itemname"].'</h5>
		<hr>
		<h3>Rs.'.$row["price"].'</h3>';
echo	'<h6>(Incluive of all taxes)</h6>
		<br><br>
		<h5>SIZE CHARTS</h5>
		<ul style="list-style-type:none;">
		<li class="itemsize">38</li>
		<li class="itemsize">40</li>
		<li class="itemsize">42</li>
		<li class="itemsize">44</li>
		<li class="itemsize">46</li>
		</ul>
		<br><br>
		<button class="btn btn-danger btn-lg"><a href="addcart.php?itemid='.$x.'"  style="text-decoration:none; color:white;">Add To Bag</a></button>
		<button class="btn btn-outline-dark btn-lg" style="margin-left:20px;">Wishlist</button>
		<br><br>
		<p>100% Original Products<br>
		Pay on delivery might be available<br>
		Easy 30 days returns and exchanges<br>
		Try & Buy might be available</p>';
echo	'<hr>
		<h4>Product Details:</h4>
		<p>'.$row["itemdescr"].'</p>
		<hr>
		<div style="display:inline-block">
		<h5>Brand:</h5>
		<p>'.$row["brand"].'</p>
		</div>
		<div style="display:inline-block; margin-left:180px;">
		<h5>Subcategory:</h5>
		<p>'.$row["subcatname"].'</p>
		</div>
		<br><br>
		<div style="display:inline-block;">
		<h5>Material:</h5>
		<p>'.$row["material"].'</p>
		</div>
		<div style="display:inline-block; margin-left:180px;">
		<h5>Color:</h5>
		<p>'.$row["color"].'</p>
		</div>
		<br><br>	
</div>
</div>';
?>
<div class="container-fluid">
<h3>SIMILAR PRODUCTS</h3>
<?php
$conn = mysqli_connect('localhost','root','','ecommerce');
$query="SELECT *
		FROM category";
$result=mysqli_query($conn,$query);
$i=0;
while(($row=mysqli_fetch_assoc($result))&&($i<5))
{
	echo '<div class="catg">';
	echo '<img src='.$row["catimg"].' height=200px width=200px style="border-radius:100%;">';
	echo '<h3>'.$row["catname"].'</h3>';
	echo '</div>';
	$i=$i+1;
}
?>
</div>
</body>
</html>
<?php
include("footer.php");
?>