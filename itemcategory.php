<?php
include("navbar.php");
?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
div.colors{
	display:none;
}
a:focus + div.colors{
	z-index:1;
	position:absolute;
	overflow:auto;
	display:inline-block;	
	height:400px;
	width:200px;
	background:rgba(2,0,0,0.5);

}
div.colors:hover{
	z-index:1;
	position:absolute;
	overflow:auto;
	display:inline-block;
	height:400px;
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
<?php
$conn = mysqli_connect('localhost','root','','ecommerce');
$x=$_GET['catid'];
?>
<nav class="navbar navbar-expand-sm" style="margin-top:60px; background-color:#C04000;">
    <ul class="navbar-nav col-sm-4 ps-5">
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:white;">Color</a>
		 <div class="colors">
		<form action="itemcategory.php">
			<div class="form-check ss">
				<input type="checkbox" class="form-check-input" id="color" name="color" value="White">
				<label class="form-check-label" for="check1">White</label>
			</div>
			<div class="form-check ss">
				<input type="checkbox" class="form-check-input" id="color" name="color" value="Black">
				<label class="form-check-label" for="check2">Black</label>
			</div>
			<div class="form-check ss">
				<input type="checkbox" class="form-check-input" id="color" name="color" value="Purple">
				<label class="form-check-label">Purple</label>
			</div>
			<div class="form-check ss" style="display:none;">
				<input type="checkbox" class="form-check-input" id="color" name="catid" value=<?php echo $x;?> checked>
			</div>
			<button type="submit" class="btn btn-primary mt-3 ss">Submit</button>
		</form>
		</div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:white;padding-left:30px;">Occasion</a>
		<div class="colors">
		 <form action="itemcategory.php">
			<div class="form-check ss">
				<input type="checkbox" class="form-check-input" id="casual" name="subcat" value="casual">
				<label class="form-check-label" for="check1">Casual</label>
			</div>
			<div class="form-check ss">
				<input type="checkbox" class="form-check-input" id="formal" name="subcat" value="formal">
				<label class="form-check-label" for="check2">Formal</label>
			</div>
			<div class="form-check ss" style="display:none;">
				<input type="checkbox" class="form-check-input" id="color" name="catid" value=<?php echo $x;?> checked>
			</div>
			<button type="submit" class="btn btn-primary mt-3 ss">Submit</button>
		</form>
		</div>
      </li>
</nav>

<br><br>
<div class="container-fluid">
  <?php
$query="SELECT *
		FROM category
		WHERE catid='$x'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
echo '<div style="text-transform:capitalize;">';
echo '<h1>'.$row["catname"].' for Men</h1>';
echo '</div>';
if(isset($_GET['color']))
{
$col=$_GET["color"];	
$query="SELECT *
		FROM item
		WHERE catid='$x' AND color='$col'";
}
elseif(isset($_GET['subcat']))
{
$col=$_GET["subcat"];	
$query="SELECT *
		FROM item,subcategory
		WHERE subcategory.subcatname='$col' AND subcategory.sid=item.subcatid AND catid='$x'";	
}
else{
$query="SELECT *
		FROM item
		WHERE catid='$x'";
}	
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
