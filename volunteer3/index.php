<!doctype html>
<html lang="en">
  <head>
  	<title>Enigma Help - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="login/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
						<center>
						<h2 class="heading-section" style="color: white;">Volunteers Login</h2>
					</center>
		      
		      	<p class="text-center">Sign in by entering the information below</p>
				  <form action="login.php" method="post">
					<?php if (isset($_GET['error'])) { ?>
						<p class="error"><?php echo $_GET['error']; ?></p>
					<?php } ?>
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" class="form-control" name="uname" placeholder="User Name" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" class="form-control"  name="password" placeholder="Password" required>
	            </div>
	           
	            <div class="form-group">
	            	<button type="submit" class="btn form-control btn-primary rounded submit px-3">Login</button>
	            </div>
	          </form>
			
			  <h3 style="text-align: center;">OR</h3>
		<center>
	       
			
		
			 <button class="btn form-control  rounded submit px-3"  style="margin-top: 10px; margin-bottom: 10px;  color:white;   background-color: darkred;
			 "><a href="../admin/index.php">Admin Login</a></button>
			</center>
			</div>
			</div>
		</div>
	</section>

	<script src="login/js/jquery.min.js"></script>
  <script src="login/js/popper.js"></script>
  <script src="login/js/bootstrap.min.js"></script>
  <script src="login/js/main.js"></script>

	</body>
</html>

