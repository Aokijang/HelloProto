<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <title>Hello World</title>
	    <link rel="stylesheet" type="text/css" href="css/grid.css">
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">
	  		<div class="row">
	  			<div class="col-12 bg_navbar">
	  				<div class="row">
	  					<div class="col-12">
	  						<div class="row icon">
	  							<div class="col-12" align="center">
	  								<img src="css/magnifying-glass-flat-icons.svg">
	  								<h2 style="margin: 0">HelloWorld</h2>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="col-12 bg_login">
	  				<div class="row">
	  					<div class="col-12 titles">
	  						<h1>Welcome.</h1>
	  						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  						tempor incididunt ut labore et dolore magna aliqua.</p>
	  						<div class="row">
	  							<div class="col-12">
	  								<div class="row">
	  									<div class="col-4"></div>
	  									<div class="col-4 mini-box">
	  										<h2>Login</h2>
	  										<form action="" method="POST">
		  										<input type="text" name="user" placeholder="Username"><br>
		  										<input type="password" name="pass" placeholder="Password" maxlength="16"><br>
		  										<input type="submit" name="submit" value="Login">
			  								</form>
			  								<?php

			  									if(isset($_POST['submit'])){
			  										$user = $_POST['user'];
			  										$pass = $_POST['pass'];
			  										$data_user = mysqli_query($conn, "SELECT * FROM user_data WHERE user_name = '$user' AND password = '$pass'");
			  										$r = mysqli_fetch_array($data_user);
			  										$user_n = $r['user_name'];
			  										$pass_n = $r['password'];
			  										$level = $r['status'];
			  										if($user == $user_n && $pass == $pass_n){
			  											$status = $r['status'];
			  											if($status == 'guru'){
			  												?>
			  													<script type="text/javascript">
			  														location.href = "guru.php";
			  													</script>
			  												<?php
			  											}
			  											elseif($status == 'siswa'){
			  												?>
			  											}
			  										}
			  									}
			  								?>
	  									</div>
	  									<div class="col-4"></div>
	  								</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
  		</div>
	</body>
</html>