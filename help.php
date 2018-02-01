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
                <li class="hover"><a href="help.php"><i class="fa fa-question-circle-o"></i> Help</a></li>
                <li><a href="class.php"><i class="fa fa-group"></i> Class</a></li>
                <li><a href="note.php"><i class="fa fa-bookmark-o"></i> Note</a></li>
                <li><a href="assignment.php"><i class="fa fa-flag-o"></i> Assignment</a></li>
                <li><a href="quiz.php"><i class="fa fa-gamepad" style="color: white"></i> Quiz</a></li>
                <li><a href="discussion.php"><i class="fa fa-comments" style="color: white"></i> Discussion</a></li>
                <li><a href="task.php"><i class="fa fa-pencil" style="color: white"></i> Task List</a></li>
              </ul>
            </div>
            <div class="col-12 content">
              <div class="row">
                <div class="col-12">
                  <div class="text-cont other-text-cont">
                    <div class="row">
                      <div class="col-12">
                        <h1 class="title-text">Help</h1>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="help-cont">
                          <ol>
                            <li>Pembagian Tipe User</li>
                            <p>Di Aplikasi Hello World, user dibagi menjadi tiga. Yaitu: Siswa, Guru, dan Orang Tua.</p>

                            <li>Siswa</li>
                            <p>Siswa adalah tipe user yang dapat: Menerima Post; Menerima Note; Menerima Assignment, Men-reply Assignment, dan Mengumpulkan Assignment; Menerima Quiz, Mengerjakan Quiz; Berdiskusi di Discussion; Men-create Task List, Men-edit Task List, Men-hapus Task List.</p>

                            <li>Guru</li>
                            <p>Guru adalah tipe user yang dapat: Membuat Post, Menerima Post; Membuat Note, Menerima Note; Membuat Assignment, Men-reply Assignment, dan Melihat Hasil Kerja Siswa dalam Assignment; Membuat Quiz, Melihat Hasil Kerja Siswa dalam Quiz; Berdiskusi di Discussion; Men-create Task List, Men-edit Task List, Men-hapus Task List.</p>

                            <li>Orang Tua</li>
                            <p>Orang Tua adalah tipe user yang dapat: Menerima Post; Menerima Note; Melihat Hasil Kerja Siswa dalam Assignment; Melihat Hasil Kerja Siswa dalam Quiz; Berdiskusi di Discussion; Melihat Task List Siswa.</p>

                            <li>Home</li>
                            <img src="help/home/home.PNG" alt="">
                            <p>Home adalah tempat dimana kamu dapat membuat post dan melihat post terbaru. Baik dari guru, maupun siswa. Tombol Like berfungsi untuk men-like suatu post, semua orang dapat melihat berapa banyak like dan siapa-siapa saja yang men-like post tersebut. Sementara itu, tombol Reply berfungsi untuk membalas post. Balasan itu secara defaultnya bakal di-hide kecuali tombol Reply ditekan.</p>

                            <li>About</li>
                            <img src="help/about/about.PNG" alt="">
                            <p>About berisi tentang informasi dasar tentang aplikasi web ini</p>

                            <li>Class</li>
                            <img src="help/class/class.PNG" alt="">
                            <p>Class berisi kelas-kelas yang tersedia. Disini anda dapat melihat informasi dasar tentang kelas tersebut dan jika di klik, anda akan diarahkan ke webnya kelas tersebut.</p>

                            <li>Note</li>
                            <img src="help/note/note_siswa.PNG" alt="">
                            <p>About berisi tentang catatan yang diberikan oleh guru.</p>

                            <li>Assignment</li>
                            <img src="help/assignment/assignment_siswa.PNG" alt="">
                            <p>Assignment berisi tentang tugas yang diberikan oleh guru. Jika anda adalah seorang guru, anda dapat membuat assignment baru. Jika anda adalah seorang siswa, anda dapat melihat assignment apa aja yang diberikan oleh guru dan mengumpulkan file assignment. Jika anda adalah seorang orang tua, anda dapat melihat assignment apa aja yang diberikan oleh guru serta memantau tentang apakah anak mengumpulkan tugasnya atau tidak.</p>

                            <li>Quiz</li>
                            <img src="help/quiz/quiz_siswa.PNG" alt="quiz_gmbr">
                            <p>Di Quiz anda dapat mengerjakan soal yang diberikan oleh guru jika anda adalah siswa. Anda dapat membuat soal dan mengetest siswa dengan soal yang telah anda buat jika anda adalah seorang guru. Anda dapat melihat tentang apakah anak anda mengerjakan quiz atau tidak jika anda adalah orang tua.</p>

                            <li>Discussion</li>
                            <img src="help/discussion/discussion_siswa.PNG" alt="">
                            <p>Di Discussion anda dapat chat dengan guru, siswa, dan orang tua.</p>

                            <li>Task List</li>
                            <img src="help/task/task_siswa.PNG" alt="">
                            <img src="help/task/task_siswa_2.PNG" alt="">
                            <p>Di Task List anda dapat membuat kegiatan-kegiatan apa aja yang akan anda lakukan. Anda juga dapat mengedit Task List, ataupun Menghapus Task Listnya. Serta juga mencentang task list</p>
                          </ol>
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
    </script>
  </body>
</html>
