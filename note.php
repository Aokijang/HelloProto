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
        <div class="col-2 bg_sidebar">
              <ul class="navbar">
                <li><a href="siswa.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="about.php"><i class="fa fa-info-circle"></i> About</a></li>
                <li><a href="help.php"><i class="fa fa-question-circle-o"></i> Help</a></li>
                <li><a href="inbox.php"><i class="fa fa-inbox"></i> Inbox</a></li>
                <li class="hover"><a href="note.php"><i class="fa fa-bookmark-o"></i> Note</a></li>
                <li><a href="assignment.php"><i class="fa fa-flag-o"></i> Assignment</a></li>
                <li><a href="quiz.php"><i class="fa fa-gamepad" style="color: white"></i> Quiz</a></li>
                <li><a href="discussion.php"><i class="fa fa-comments" style="color: white"></i> Discussion</a></li>
                <li><a href="task.php"><i class="fa fa-pencil" style="color: white"></i> Task List</a></li>
              </ul>
          </div>
        <div class="col-2"></div>
        <div class="col-10">
          <div class="row">
            <div class="col-12 content">
              <div class="row">
                <div class="col-12">
                  <div class="other-text-cont note-cont">
                    <h2 class="class-title" align="right">[Nama Guru]</h2>
                    <p style="color: gray; font-size: 15px;" align="right">-Kepada X TKJ 1, 28 Januari 2018.</p>
                    <div class="class-content">
                      <div class="row">
                        <div class="col-3">
                <img style="width: 250px" src="css/one-page-per-month-thumbnail.png">
                        </div>
                        <div class="col-9" align="right">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                          <p style="color: red; font-size: 15px; font-weight: bold; margin: 0; margin-top: 40px;">Tanggal dimulai : 31 Januari 2018, 15.30 PM</p>
                          <p style="color: green; font-size: 15px; font-weight: bold; margin: 0; margin-top: 5px;">Tanggal selesai : 31 Januari 2018, 20.00 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="row">
                <div class="col-12">
                  <div class="other-text-cont note-cont">
                    <h1 class="title-text">Task List</h1>
                    <div class="row">
                      <div id="myDIV" class="header">
                        <input type="text" id="myInput" placeholder="Title...">
                        <button onclick="newElement()" class="addBtn">Add</button>
                      </div>

                            <ul id="myUL">
                              <li id="LI" style="display: none;"></li>
                            </ul>

                            <script>
                            var myNodelist = document.getElementById("LI");
                            var i;
                            for (i = 0; i < myNodelist.length; i++) {
                              var span = document.createElement("SPAN");
                              var txt = document.createTextNode("\u00D7");
                              span.className = "close";
                              span.appendChild(txt);
                              myNodelist[i].appendChild(span);
                            }

                            var close = document.getElementsByClassName("close");
                            var i;
                            for (i = 0; i < close.length; i++) {
                              close[i].onclick = function() {
                                var div = this.parentElement;
                                div.style.display = "none";
                              }
                            }

                            var list = document.querySelector('#myUL');
                            list.addEventListener('click', function(ev) {
                              if (ev.target.tagName === 'LI') {
                                ev.target.classList.toggle('checked');
                              }
                            }, false);

                            function newElement() {
                              var li = document.createElement("li");
                              var inputValue = document.getElementById("myInput").value;
                              var t = document.createTextNode(inputValue);
                              li.appendChild(t);
                              if (inputValue === '') {
                                alert("Tuliskan task yang diinginkan.");
                              } else {
                                document.getElementById("myUL").appendChild(li);
                              }
                              document.getElementById("myInput").value = "";

                              var span = document.createElement("SPAN");
                              var txt = document.createTextNode("\u00D7");
                              span.className = "close";
                              span.appendChild(txt);
                              li.appendChild(span);

                              for (i = 0; i < close.length; i++) {
                                close[i].onclick = function() {
                                  var div = this.parentElement;
                                  div.style.display = "none";
                                }
                              }
                          }
                          </script>
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
