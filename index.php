<?php

  session_start();
  include "connect.php";

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <title>Hello World</title>
	    <link rel="stylesheet" type="text/css" href="css/grid.css">
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	    <script type="text/javascript" src="jquery-3.2.1.js"></script>
	    <script>
	    	$(document).ready(function(){
	    		$("#login_page").show();
	    		$("#register_page").hide();
	    		$("#register").click(function(){
	    			$("#register_page").show();
	    			$("#login_page").hide();
	    		});
	    		$("#login").click(function(){
	    			$("#login_page").show();
	    			$("#register_page").hide();
	    		});
	    	});
	    </script>
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
	  									<div class="col-4 mini-box" id="login_page" style="display: inline-block;">
	  										<h2>Login</h2>
	  										<form action="" method="POST">
		  										<input type="text" name="user" placeholder="Username"><br>
		  										<input type="password" name="pass" placeholder="Password" maxlength="16"><br>
<<<<<<< HEAD
		  										<input class="button_submit" type="submit" name="log" value="Login"><br>
=======
<<<<<<< HEAD
		  										<input class="button_submit" type="submit" name="log" value="Login"><br>
=======
		  										<input class="button_submit" type="submit" name="log" value="Login">
>>>>>>> 11f1ca08b83919d5a3ce591eda0afa7071b2fd20
>>>>>>> a4d089b644471835ba4a6af6e6c853ef83bd123c
			  								</form>
			  								<?php

						                          if(isset($_POST['log'])){
						                            $user = $_POST['user'];
						                            $pass = $_POST['pass'];
						                            $data_user = mysqli_query($conn, "SELECT * FROM user_data WHERE user_name = '$user' AND password = '$pass'");
						                            $r = mysqli_fetch_array($data_user);
						                            $user_n = $r['user_name'];
						                            $pass_n = $r['password'];
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
						                                  <script type="text/javascript">
						                                    location.href = "siswa.php";
						                                  </script>
						                                <?php
						                              }
						                              elseif($status == 'ortu'){
						                                ?>
						                                  <script type="text/javascript">
						                                    location.href = "ortu.php";
						                                  </script>
						                                <?php
						                              }
						                            }
						                            else{
						                              ?>
						                              <script type="text/javascript">
						                                alert("Maaf, Username atau Password salah, silakan coba lagi.");
						                              </script>
						                              <?php
						                              }
						                           }
						                       ?> 

		  									<button class="button_change" id="register">Register</button>
	  									</div>
	  									<div class="col-4 mini-box" id="register_page" style="display: none;">
	  										<h2>Sign up</h2>
	  										<form action="item.php" method="POST" name="signup_data">
		  										<input type="text" name="user" placeholder="Username"><br>
		  										<input type="password" name="pass" placeholder="Password" maxlength="16"><br>
		  										<input type="text" name="email" placeholder="Email"><br>
		  										<input class="button_submit" type="submit" name="signup" value="Sign Up" onclick="validateData()"><br>
			  								</form>
			  								<script>
			  									function validateData(){
			  										var user_name, password, email;

			  										user_name = document.forms['signup_data']['user'].value;
			  										password = document.forms['signup_data']['pass'].value;
			  										email = document.forms['signup_data']['email'].value;

			  										if(user_name == ""){
			  											alert("Username tidak boleh kosong");
			  											return(false);
			  										}
			  										else if(password == ""){
			  											alert("Password tidak boleh kosong");
			  											return(false);
			  										}
			  										else if(password<=4){
			  											alert("Password tidak boleh kurang dari 4 huruf");
			  											return(false);
			  										}
			  										else if(email == ""){
			  											alert("Email tidak boleh kosong");
			  											return(false);
			  										}
			  										else{
			  											alert("Silahkan Login! Anda sudah terdaftar!");
			  										}
			  									}
			  								</script>
			  								<?php 

			  									include "connect.php";
			  									$query = "SELECT * FROM user_data";
			  									$result = mysqli_query($conn, $query);

			  								?>
		  									<button class="button_change" id="login">Already Have Account?</button>
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