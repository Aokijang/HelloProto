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
                <li><a href="guru.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="about_guru.php"><i class="fa fa-info-circle"></i> About</a></li>
                <li><a href="help_guru.php"><i class="fa fa-question-circle-o"></i> Help</a></li>
                <li><a href="class_guru.php"><i class="fa fa-group"></i> Class</a></li>
                <li><a href="note_guru.php"><i class="fa fa-bookmark-o"></i> Note</a></li>
                <li><a href="assignment_guru.php"><i class="fa fa-flag-o"></i> Assignment</a></li>
                <li class="hover"><a href="quiz_guru.php"><i class="fa fa-gamepad" style="color: white"></i> Quiz</a></li>
                <li><a href="discussion_guru.php"><i class="fa fa-comments" style="color: white"></i> Discussion</a></li>
                <li><a href="task_guru.php"><i class="fa fa-pencil" style="color: white"></i> Task List</a></li>
              </ul>
            </div>
            <div class="col-10 content">
              <div class="row">
                <div class="col-12">
                  <div class="other-text-cont note-cont">
                    <div class="title-text">
                      <h1>Quiz</h1>
                    </div>
                    <div class="quiz-cont">
                      <button type="button" name="create_quiz" id="create_quiz">Create Quiz</button>
                      <button type="button" name="edit_quiz" id="edit_quiz">Edit Quiz</button>
                      <button type="button" name="delete_quiz" id="delete_quiz">Delete Quiz</button>
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
