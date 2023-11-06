<?php 
if(!isset($_SESSION['username']))
{
  session_start();
}
if(!isset($_SESSION['username']))
{
	header('location: login.php');
}
if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['username']);
	header('location: login.php');
}
?>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
	.opp{
		opacity:0.5;
	}
	.opp:hover{
		opacity:1;
	}
  </style>
</head>
<body>
<?php
if(isset($_SESSION["success"])) : ?>
  <h4><?php echo $_SESSION["success"];
        unset($_SESSION["success"]); ?></h4>
  <?php endif ?>
<nav class="navbar navbar-expand-sm fixed-top" style="background-color:lightgrey;">
    <ul class="navbar-nav col-sm-4 ps-5">
      <li class="nav-item">
        <a class="nav-link" href="#">Shirts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">T-Shirts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Bottomwear</a>
      </li>
    </ul>
	<a class="navbar-brand col-sm-4 ps-5" href="index.php"><h3>MENS APPAREL</h3></a>
<div class="input-group" style="margin-left:-100px;">
<form action="searchpage.php">
    <input type="search" id="form1" class="form-control opp" name="searchinput" placeholder="Search.."/>
  <button type="submit" class="btn btn-primary opp" style="padding:10px;margin-top:-38px;margin-left:200px;">
    <i class="fa fa-search"></i>
  </button>
</form>
  <?php
  if(!isset($_SESSION["username"])) : ?>
    <a class="nav-link ps-5" href="login.php">Login</a>
  <?php endif ?>
  <?php
  if(isset($_SESSION["username"])) : ?>
    <h5 class="nav-link"><?php echo $_SESSION["username"]; ?>,</h5>
    <a class="nav-link ps-5" href="index.php?logout='1'">Logout</a>
  <?php endif ?>

  <a class="navbar-brand" href="#">
      <img src="wishlistoutline.png" alt="Avatar Logo" style="width:30px; height:30px;"> 
    </a>
  <a class="navbar-brand" href="cart.php?cid=3" >
      <img src="shopping-cart.png" id="shopcart" alt="Avatar Logo" style="width:30px; height:30px;"> 
    </a>
</div>
   
</nav>
</body>
</html>