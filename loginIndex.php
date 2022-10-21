<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Masuk | Log in </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h2 align="center">SMAN 1 Jayakarta</h2>
		<br>
		<br>
		<p align="center"><strong>Visi</strong></p>
		<p align="center">”Berjati Diri dan Maju Dalam Prestasi”.</p>
		<br>
		<p align="center"><strong>Misi</strong></p>
		<p align="center">1. Mewujudkan lembaga pendidikan yang bernuansa keagamaan, kebangsasan, keilmuan, dan wawasan lingkungan </p>
		<p align="center"> 2. Mewujudkan lembaga pendidikan yang memiliki daya saing sampai internasional.</p>
		<!-- <span>
			<p>login with social media</p>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter</a>
		</span> -->
		</div>
	</div>
	
	<form action="login.php" method="post">
		<div class="right">
		<h5>Log In</h5>
		<p>Don't have an account? <a href="SignUp.php">Creat Your Account</a> it takes less than a minute</p>
		<div class="inputs">
		<input type="text" placeholder="User Name" name="username" required>
		<br>
		<input type="password" placeholder="Password" name="password" required>
		<input type="submit" name="login" value="Login">
	</div>
	</form>
			<br><br>
			
		<div class="remember-me--forget-password">
				<!-- Angular -->
	<label>
		<input type="checkbox" name="item" checked/>
		<span class="text-checkbox">Remember me</span>
	</label>
			<p>forget password?</p>
		</div>
			
			<br>
			<!-- <button>Login</button> -->
			<!-- <input type="submit" name="register" value="Register"> -->
	</div>
	
</div>
<!-- partial -->
  
</body>
</html>
