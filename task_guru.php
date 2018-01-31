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
                  <p>Vanestica Ireline</p>
                  <div class="logout">
                    <a class="keluarout" href="index.php">Keluar</a>
                  </div>

                </div>
                <div class="col-1 logo" style="text-align:right">
                  <img src="css/profile3.png">
                </div>


              </div>
   					</div>
  				</div>
  			</div>
  		</div>
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-2 bg_sidebar">
              <ul class="navbar">
                <li><a href="guru.php">Home</a></li>
                <li><a href="about_guru.php">About</a></li>
                <li><a href="help_guru.php">Help</a></li>
                <li><a href="class_guru.php">Class</a></li>
                <li><a href="note_guru.php">Note</a></li>
                <li><a href="assignment_guru.php">Assignment</a></li>
                <li><a href="quiz_guru.php">Quiz</a></li>
                <li><a href="discussion_guru.php">Discussion</a></li>
                <li class="hover"><a href="task_guru.php">Task List</a></li>
              </ul>
            </div>
            <div class="col-10 content">
              <div class="row">
                <div class="col-12">
                  <div class="other-text-cont note-cont">
                    <h1 class="title-text">Task List</h1>
                    <div class="row">
                      <div class="col-12">
                        <div class="task">
                          <ul>
                            <li><input type="checkbox" name="check" id="check">Check Quiz<span class="date">(33-Jan-2020)</span></li>
                            <li><input type="checkbox" name="check" id="check">Check PR Membaca <span class="date">(34-Jan-2020)</span></li>
                            <li><input type="checkbox" name="check" id="check">Check Pr Melukis <span class="date">(35-Jan-2020)</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="task-edit">
                          <button type="button" name="create" id="create">Create</button>
                          <button type="button" name="edit" id="edit">Edit</button>
                          <button type="button" name="delete" id="delete">Delete</button>
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
          <div class="col-5 repad">
            <div class="row">
              <div class="col-12">
                <p>Have any tips for us? Click this button.</p>
              </div>
            </div>
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
      </footer>
  	</div>
  </body>
</html>
