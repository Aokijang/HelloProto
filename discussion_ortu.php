<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello World</title>
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/Icons/font-awesome.css">
    <script src="jquery-3.2.1.js"></script>
  </head>
  <body onload="footerChange()" onresize="footerChange()">
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
                  <p>Hansen Artajaya</p>
                  <div class="logout">
                    <a class="keluarout" href="index.php">Keluar</a>
                  </div>

                </div>
                <div class="col-1 logo" style="text-align:right">
                  <img src="css/profile2.jpg">
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
                <li><a href="ortu.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="about_ortu.php"><i class="fa fa-info-circle"></i> About</a></li>
                <li><a href="help_ortu.php"><i class="fa fa-question-circle-o"></i> Help</a></li>
                <li><a href="inbox_ortu.php"><i class="fa fa-inbox"></i> Inbox</a></li>
                <li><a href="note_ortu.php"><i class="fa fa-bookmark-o"></i> Note</a></li>
                <li><a href="assignment_ortu.php"><i class="fa fa-flag-o"></i> Assignment</a></li>
                <li><a href="quiz_ortu.php"><i class="fa fa-gamepad" style="color: white"></i> Quiz</a></li>
                <li class="hover"><a href="discussion_ortu.php"><i class="fa fa-comments" style="color: white"></i> Discussion</a></li>
                <li><a href="task_ortu.php"><i class="fa fa-pencil" style="color: white"></i> Task List</a></li>
              </ul>
            </div>
            <div class="col-12 content">
              <div class="row">
                <div class="col-12">
                  <div class="other-text-cont note-cont">
                    <h1 class="title-text">X TKJ 2</h1>
                    <div class="chat-room">
                      <div class="row">
                        <div class="col-12">
                          <div class="chat-cont">
                            <div class="row">
                              <div class="col-8">
                                <div class="chat-text-cont">
                                  <div class="row">
                                    <div class="col-2">
                                      <img src="css/profile3.png" alt="">
                                    </div>
                                    <div class="col-10">
                                      <div class="row">
                                        <div class="col-12">
                                          <h2>Vanestica Ireline</h2>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-12">
                                          <div class="chat-text">
                                            Harap Di Kerjakan Quiznya
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-4"></div>
                            </div>
                          </div>

                          <div class="chat-cont">
                            <div class="row">
                              <div class="col-8">
                                <div class="chat-text-cont">
                                  <div class="row">
                                    <div class="col-2">
                                      <img src="css/profile.png" alt="">
                                    </div>
                                    <div class="col-10">
                                      <div class="row">
                                        <div class="col-12">
                                          <h2>Wendy Yansah</h2>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-12">
                                          <div class="chat-text">
                                            Ok Bu
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-4"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="chat-input">
                        <div class="col-10">
                          <input type="text" name="send-text" id="send-text" placeholder="Masukkan pesan anda disini...">
                        </div>
                        <div class="col-2">
                          <input type="submit" name="send" id="send" value="Kirim">
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

      function footerChange() {
        var windowHeight = window.innerHeight;
        document.querySelector(".content").style = "min-height:" + (windowHeight - headerHeight) + "px";
        setTimeout(footerChange(), 5000);
      }
    </script>
  </body>
</html>
