<?php
session_start();
$username="";
$email="";
$password="";
$cpassword="";
$errors=array();
$db=mysqli_connect('localhost','root','','ecommerce');
if(isset($_POST['Reg_User']))
{
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
    $caddress=mysqli_real_escape_string($db,$_POST['address']);
    $state=mysqli_real_escape_string($db,$_POST['cstate']);
    $pincode=mysqli_real_escape_string($db,$_POST['pincode']);
	$password=mysqli_real_escape_string($db,$_POST['pass1']);
	$cpassword=mysqli_real_escape_string($db,$_POST['pass2']);

if(empty($username)){ array_push($errors,"username required");}
if(empty($email)){ array_push($errors,"email required");}
if(empty($password)){ array_push($errors,"password required");}
if($password != $cpassword)
{ array_push($errors,"Passwords do not match");}

$query="SELECT * FROM customer WHERE cname='$username' OR password='$password' LIMIT 1";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_assoc($result);
if($row)
{
	if($row['cname']===$username)
	{
		array_push($errors,"Username already exists");
	}
	if($row['cemail']===$email)
	{
		array_push($errors,"Email already exists");
	}
}

if(count($errors)==0)
{
	  	//$password = md5($password);
	$query="INSERT INTO customer(cname,cemail,password,caddress,cstate,cpincode) VALUES('$username','$email','$password','$caddress','$state','$pincode')";
	$result=mysqli_query($db,$query);
	$_SESSION['username']=$username;
	$_SESSION['success']="you are logged in";
	header('location: index.php');
}
}
if(isset($_POST['login_user']))
{
    $email=mysqli_real_escape_string($db,$_POST['email']);
	$password=mysqli_real_escape_string($db,$_POST['password']);

if(empty($email)){ array_push($errors,"**Email required\n");}
if(empty($password)){ array_push($errors,"**Password required\n");}
if(count($errors) == 0)
{
  	//$password = md5($password);
    echo "\n\n ".$password;
$query="SELECT * FROM customer WHERE cemail='$email' AND password='$password'";
$result=mysqli_query($db,$query);
echo "\n\n".mysqli_num_rows($result);
if(mysqli_num_rows($result)==1)
{
    $row = mysqli_fetch_assoc($result);
	$_SESSION['username']=$row["cname"];
	$_SESSION['success']="You are logged in";
	header('location: index.php');
}
else
{
	array_push($errors,"Username/Email does not exist");
	?>
	<script type="text/javascript">
		var js_array =<?php echo json_encode($errors );?>;
		window.location.href="login.php";
		var s=alert(js_array);
	

	
	</script>
	<?php
}
}
else
{
	?>
	<script type="text/javascript">
	var js_array =<?php echo json_encode($errors );?>;
	window.location.href="login.php";

	var s=alert(js_array);

	</script>
	<?php 
	//if($val==1){
	//header('location: login.php');}
}
}
?>