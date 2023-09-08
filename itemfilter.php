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
<nav class="navbar navbar-expand-sm" style="margin-top:60px; background-color:#C04000;">
    <ul class="navbar-nav col-sm-4 ps-5">
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:white;">Color</a>
		 <div class="colors">
		 <form action="items.php">
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="color" name="option1" value="White" onclick=myFunc()>
				<label class="form-check-label" for="check1">White</label>
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="color" name="option2" value="Black" onclick=myFunc()>
				<label class="form-check-label" for="check2">Black</label>
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="color" name="option3" value="Purple" onclick=myFunc()>
				<label class="form-check-label">Purple</label>
			</div>
			<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
		</div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:white;padding-left:30px;">Occasion</a>
		<div class="colors">
		 <form action="items.php">
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="casual" name="option1" value="something">
				<label class="form-check-label" for="check1">Casual</label>
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="formal" name="option2" value="something">
				<label class="form-check-label" for="check2">Formal</label>
			</div>
			<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
		</div>
      </li>
</nav>
<br><br>
<div class="container-fluid">
  <?php
$conn = mysqli_connect('localhost','root','','ecommerce');
if(isset($_GET['color']))
{
	$x=$_GET['catid'];
	$y=$_GET['color'];
$query="SELECT *
		FROM item
		WHERE catid='$x' AND color='$y'";	
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
<script>
function myFunc() {
  var checkBox = document.getElementById("color");
  var text = checkBox.value;
  if (checkBox.checked == true){
    a.href = "itemfilter.php?color=".text;
  }
}
</script>
</body>
</html>
<?php
include("footer.php");
?>
