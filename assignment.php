<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello World</title>
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/Icons/font-awesome.css">
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-12 bg_navbar">
  				<div class="row">
  					<div class="col-6">
  						<div class="row icon">
  							<div class="col-2" align="right">
  								<img src="css/magnifying-glass-flat-icons.svg">
  							</div>
  							<div class="col-10">
  								<div class="title">
  									<h3>HelloWorld!</h3>
  								</div>
  								<div class="subtitle">
  									<p>Saatnya belajar</p>
  								</div>
  							</div>
  						</div>
  					</div>
  					<div class="col-6 nav-bar">
              <div class="row">
                <div class="col-11 username">
                  <p>Wendy Yansah</p>
                  <div class="logout">
                    <a class="keluarout" href="index.php">Keluar</a>
                  </div>

                </div>
                <div class="col-1 logo" style="text-align:right">
                  <img src="css/profile.png">
                </div>


              </div>
   					</div>
  				</div>
  			</div>
  		</div>
      <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
          <div class="row">
            <div class="col-2 bg_sidebar">
              <ul class="navbar">
                <li><a href="siswa.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="about.php"><i class="fa fa-info-circle"></i> About</a></li>
                <li><a href="help.php"><i class="fa fa-question-circle-o"></i> Help</a></li>
                <li><a href="inbox.php"><i class="fa fa-group"></i> Inbox</a></li>
                <li><a href="note.php"><i class="fa fa-bookmark-o"></i> Note</a></li>
                <li class="hover"><a href="assignment.php"><i class="fa fa-flag-o"></i> Assignment</a></li>
                <li><a href="quiz.php"><i class="fa fa-gamepad" style="color: white"></i> Quiz</a></li>
                <li><a href="discussion.php"><i class="fa fa-comments" style="color: white"></i> Discussion</a></li>
                <li><a href="task.php"><i class="fa fa-pencil" style="color: white"></i> Task List</a></li>
              </ul>
            </div>
            <div class="col-12 content">
              <div class="row">
                <div class="col-12">
                  <div class="other-text-cont note-cont">
                    <h2 class="class-title">[Nama Guru]</h2>
                    <p style="color: gray; font-size: 15px;">-Kepada X TKJ 1, 28 Januari 2018.</p>
                    <div class="class-content">
                      <div class="row">
                        <div class="col-2">
                          <img src="css/class.jpg" alt="">
                        </div>
                        <div class="col-10">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                      </div>
                      <div class="row assignment-content">
                        <div class="col-6">
                          <button type="button" name="submit" id="submit">Submit</button>
                          <button type="button" name="reply" id="reply">Reply</button>
                        </div>
                        <div class="col-6">
                          <p align="right" style="color: red; font-size: 15px; font-weight: bold; margin: 0;">Tanggal dimulai : 31 Januari 2018, 15.30 PM</p>
                          <p align="right" style="color: green; font-size: 15px; font-weight: bold; margin: 0; margin-top: 5px;">Tanggal selesai : 31 Januari 2018, 20.00 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="row">
          <div class="col-2"></div>
          <div class="col-10">
            <div class="row">
              <div class="col-5 repad">
                <div class="row">
                  <div class="col-12">
                    <p>Have any tips for us? Click this button.</p>
                      <div class="row">
                       <div class="col-12">
                        <a href="#">Ideas and Tips</a>
                       </div>
                      </div>
                      <div class="row" id="footer-menu-container">
                        <div class="col-3 footer-menu">
                          FAQ
                        </div>
                        <div class="col-3 footer-menu">
                          About Us
                        </div>
                        <div class="col-3 footer-menu">
                          Contact Us
                        </div>
                        <div class="col-3"></div>
                      </div>
                  </div>
                <div class="col-7"></div>
              </div>
            </div>
             </div>
            </div>
          </div>
      </footer>
  	</div>
    <script>
      var headerHeight = document.querySelector(".bg_navbar").offsetHeight;
      document.querySelector(".bg_sidebar").style = "top:" + headerHeight + "px";

      var windowHeight = window.innerHeight;
      document.querySelector(".content").style = "min-height:" + (windowHeight - headerHeight) + "px";
    </script>
  </body>
</html>
