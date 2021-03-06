<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello World</title>
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/Icons/font-awesome.css">
  </head>
  <body onresize="footerChange()" onload="footerChange()">
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
                <li><a href="inbox.php"><i class="fa fa-inbox"></i> Inbox</a></li>
                <li><a href="note.php"><i class="fa fa-bookmark-o"></i> Note</a></li>
                <li><a href="assignment.php"><i class="fa fa-flag-o"></i> Assignment</a></li>
                <li class="hover"><a href="quiz.php"><i class="fa fa-gamepad" style="color: white"></i> Quiz</a></li>
                <li><a href="discussion.php"><i class="fa fa-comments" style="color: white"></i> Discussion</a></li>
                <li><a href="task.php"><i class="fa fa-pencil" style="color: white"></i> Task List</a></li>
              </ul>
            </div>
            <div class="col-12 content">
              <div class="row">
                <div class="col-12">
                  <div class="other-text-cont note-cont">
                    <div class="soal-cont">
                      <h1 class="title-text">Soal ke - 1</h1>
                      <p>1 + 1 = ...</p>
                      <div class="row">
                        <div class="col-12">
                          <input type="submit" name="a" id="a" value="A.  11">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <input type="submit" name="b" id="b" value="B.  2">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <input type="submit" name="c" id="c" value="C.  Lupa Cara Hitung">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <input type="submit" name="d" id="d" value="D.  Satu Belas">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <input type="submit" name="e" id="e" value="E.  Jendela">
                        </div>
                      </div>
                    </div>

                    <div class="soal-cont">
                      <h1 class="title-text">Soal ke - 2</h1>
                      <p>a + b = c. Maka, a = ...</p>
                      <div class="row">
                        <div class="col-12">
                          <input type="submit" name="a" id="a" value="A.  c - b">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <input type="submit" name="b" id="b" value="B.  b - c">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <input type="submit" name="c" id="c" value="C.  a - c">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <input type="submit" name="d" id="d" value="D.  b - a">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <input type="submit" name="e" id="e" value="E.  a - b">
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
