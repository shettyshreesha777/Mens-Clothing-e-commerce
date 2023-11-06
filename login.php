<?php
if(isset($_SESSION["username"]))
    include("navbar.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>E-Com Login</title>
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
<div id="template-bg-1">
    <div
        class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="card p-4 text-light bg-dark mb-5">
            <div class="card-header">
                <h3>Sign In</h3>
            </div>
            <div class="card-body w-100">
                <form name="login" action="RegUser.php" method="post" >
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i
                                class="fas fa-user mt-2"></i></span>
                        </div>
                        <input type="text" class="form-control"
                            placeholder="Email" name="email">
                    </div>
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                        </div>
                        <input type="password" class="form-control"
                            placeholder="password" name="password">
                    </div>

                    <div class="form-group mt-3">
                        <input type="submit" value="Login"
                            class="btn bg-secondary float-end text-white w-100"
                            name="login_user">
                    </div>
        
                </form>
			</div>
            <div class="card-footer">
                <div class="d-flex justify-content-center">
                    <div class="text-primary">
                        <a href="register.php">New User?, Register here.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>