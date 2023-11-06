<?php
include("navbar.php");
?>
<html>
<head>
<link rel="stylesheet" href="ecom.css">
</head>
<body>
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel" style="margin-top:60px;">

  <!-- Indicators/dots -->
  <div class="carousel-indicators" >
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
	<button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  </div>
  <div class="carousel-inner">
  <?php
$conn = mysqli_connect('localhost','root','','ecommerce');
$query="SELECT *
		FROM subcategory ";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result); 
  //<!-- The slideshow/carousel -->

echo '<div class="carousel-item active">';
echo '<img src='.$row["subcatimg"].' alt="Los Angeles" class="d-block" height=500px style="width:100%">
      <div class="carousel-caption" style="text-transform: capitalize;">';
echo '<h1>'.$row["subcatname"].'</h1>
        <p>Up To 40% Off</p>
		<a href="carasolshop.php?subcatid='.$row['sid'].'"><button type="button" class="btn btn-dark btn-lg opp">Shop Now</button></a>
      </div>
    </div>';
while($row=mysqli_fetch_assoc($result))
{	
echo '<div class="carousel-item">';
echo '<img src='.$row["subcatimg"].' alt="Los Angeles" class="d-block" height=500px style="width:100%">
      <div class="carousel-caption" style="text-transform: capitalize;">';
echo '<h1>'.$row["subcatname"].'</h1>
        <p>Up To 40% Off</p>
		<a href="carasolshop.php?subcatid='.$row['sid'].'"><button type="button" class="btn btn-dark btn-lg opp">Shop Now</button></a>
      </div>
    </div>';
}
?>
  </div>
   
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon btn-primary"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon btn-primary"></span>
  </button>
</div>

<div class="container-fluid res">
	<div class="container na">
		<h1 class="t1">New Arrivals</h1>
		<img src="https://pbs.twimg.com/media/DlwBHgTWsAE1D2B?format=jpg&name=4096x4096" height=440px width=400px>
	</div>
	<div class="container ss">
		<h1 class="t2">Shoe Spring</h1>
		<img src="https://n1.sdlcdn.com/imgs/i/t/v/UNDER-ARMOUR-STEPHEN-CURRY-6-SDL622611113-1-e2b78.jpg" height=440px width=400px>
	</div>
	<div class="container ac">
		<h1 class="t3">Accessories</h1>
		<img src="https://i.pinimg.com/originals/7e/07/d5/7e07d55422124fed45d135682e81bc97.jpg" height=440px width=400px>
	</div>
</div>

<div class="container-fluid bdob">
<h1>BIGGEST DEALS ON TOP BRANDS</h1>
	<div class="brands" style="margin-left:30px;">
	<a href="items.php">
	<img src="https://i.pinimg.com/originals/2e/39/78/2e3978799ced17d6cd526b0d3b98fe48.jpg" height=300px width=250px style="border-radius:30px;padding-bottom:20px;">
	</a>
	<h3>Nike</h3>
	<h4>Min 30-40% Off</h4>
	</div>
	<div class="brands">
	<img src="https://cdna.lystit.com/photos/jdsports/a7f8807c/adidas-BlackGrey-3-stripes-Poly-Tracksuit.jpeg" height=300px width=250px style="border-radius:30px;padding-bottom:20px;">
	<h3>Adidas</h3>
	<h4>Min 30-40% Off</h4>
	</div>
		<div class="brands">
	<img src="https://stylemann.com/wp-content/uploads/2017/01/Levi%E2%80%99s-Jeans-8-765x765.jpg" height=300px width=250px style="border-radius:30px;padding-bottom:20px;">
	<h3>Levis</h3>
	<h4>Min 30-40% Off</h4>
	</div>
		<div class="brands">
	<img src="https://fgl.scene7.com/is/image/FGLSportsLtd/FGL_Puma-Suede-D1-540x540" height=300px width=250px style="border-radius:30px;padding-bottom:20px;">
	<h3>Puma</h3>
	<h4>Min 30-40% Off</h4>
	</div>
</div>

<div class="container-fluid">
<h1>Categories to Bag</h1>
<?php
$conn = mysqli_connect('localhost','root','','ecommerce');
$query="SELECT *
		FROM category";
$result=mysqli_query($conn,$query);
$i=0;
while(($row=mysqli_fetch_assoc($result))&&($i<5))
{
	echo '<div class="catg">';
	echo '<a href="itemcategory.php?catid='.$row['catid'].'">';
	echo '<img src='.$row["catimg"].' id='.$row["catname"].' height=200px width=200px style="border-radius:100%;"></a>';
	echo '<h3>'.$row["catname"].'</h3>';
	echo '</div>';
	$i=$i+1;
}
?>
</div>

<div class="container-fluid">
<h1>Trending Accessories</h1>
<?php
$conn = mysqli_connect('localhost','root','','ecommerce');
$query="SELECT *
		FROM category 
		WHERE catid=6 or catid=7 or catid=8";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
	echo '<div class="brands" style="margin-left:100px;">';
	echo '<img src='.$row["catimg"].' height=300px width=250px style="border-radius:30px;padding-bottom:20px;">';
	echo '<h3>'.$row["catname"].'</h3>';
	echo '</div>';
}
?> 
</div>
</body>
</html>
<?php
include("footer.php");
?>