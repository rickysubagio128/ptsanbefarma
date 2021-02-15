<?php
session_start();
if (isset($_SESSION['username']) === false) { // cek session apakah kosong(belum login) maka alihkan ke login.php
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>Sanbe Farma</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/bx/css/boxicons.css">
        <link rel="stylesheet" href="bootstrap/bx/css/boxicons.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    </head>

    <style>
  footer {
		padding: 30px 0;
		background-color: rgb(0, 0, 0);
		color: white;
		text-align: center;
	}
    </style>

    <body>
      <!-- header -->
      <div class="medsos">
        <div class="container">
            <ul>
              <a href="#" class="form__social-icon"><i class="bx bxl-facebook" ></i></a>
              <a href="#" class="form__social-icon"><i class="bx bxl-google" ></i></a>
              <a href="#" class="form__social-icon"><i class="bx bxl-instagram" ></i></a>
              <a href="#" class="form__social-icon"><i class="bx bxl-youtube" ></i></a>
            </ul>
        </div>
      </div>
    </body>
<!-- Navigation Bar-->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Sanbe Farma</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#product">Product</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="obat.php">Data Obat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                  <img class = "img-profile rounded-circle" src="img/profile.svg" width="26" height="26"> <?php echo $_SESSION['username'];?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="config/logout.php">Log out</a>
                  </div>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
          <section class="sanbe" id="sanbe">
            <div class="container-fluid">
                <div class="row">
              <div class="col-sm-12 text-center" style="background-color: aquamarine;">
            <h2>Welcome to Sanbe Farma</h2>
            <br>
              </div>
            </div>
          </div>    
          <section class="home" id="Home">
              <div class="container">
                  <div class="row">
                <div class="col-sm-12 text-center">
            <h2>Latest News</h2>
            <hr>
            <div class="row">
              <div class="col-md-3">
                  <div class="card">
                      <img src="img/award.jpg" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title m-1">The First WHO GMP Accreditation for Penicillin Plant and Sterile Preparations Plant of PT SANBE FARMA in Indonesia</h5>
                        <p class="card-text m-1">In June 2017, PT SANBE FARMA has been accredited for Good Manufacturing Practice by World Health Organization (WHO) for two of its state of the art facilities, Penicillin Plant and Sterile Preparations...</p>
                        <a href="award.html" class="btn btn-primary">Read More ></a>
                      </div>
                    </div>
                  </div>
            <div class="col-md-3">
              <div class="card">
                  <img src="img/sby.jpg" class="card-img-top" alt="">
                     <div class="card-body">
                        <h5 class="card-title m-1">Sanbe Achieves Yet Another Milestones with GCC Approval</h5>
                        <p class="card-text m-1">Good Manufacturing Certificate Approval From GCC (Gulf Cooperation Council) Sanbe have received GCC approval for two of its world class manufacturing facilities situated in Bandung, Indonesia. GCC... </p>
                        <a href="sby.html" class="btn btn-primary">Read More ></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card">
                        <img src="img/oncology2.jpg" class="card-img-top" alt="">
                           <div class="card-body">
                              <h5 class="card-title m-1">The Inaugural of SANBE's Oncology Plant By The Vice Minister Of Health Of The Republic Indonesia</h5>
                              <p class="card-text m-1">Sanbe Farma one of the leading local pharmaceutical companies in Indonesia is committed to increase the quality of people’s health and improve the government health program. As the realization...</p>
                              <a href="sanbe.html" class="btn btn-primary">Read More ></a>
                            </div>
                          </div>
                        </div>
                        <br>
                        <br>
                        <br>
                  <section class="product" id="product">
                    <div class="container">
                        <div class="row">
                          <div class="col-sm-12 text-center">
                    <h2>OTC Product</h2>
                    <hr>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4" style="text-align: center;">
                        <a href="">
                            <img src="img/product/neosanmaag_fast.png" alt="" class="img-thumbnail">
                        </a>
                        <h4>NEOSANMAG FAST</h4>
                        </div>
                    <div class="col-sm-4" style="text-align: center;">
                        <a href="">
                            <img src="img/product/pro_pro_PACKSHOOT_Sanaflu_Syrup.png" alt="" class="img-thumbnail">
                        </a>
                        <h4>SANAFLU PLUS COUGH (SYRUP)</h4>
                        </div>
                    <div class="col-sm-4" style="text-align: center;">
                      <a href="">
                          <img src="img/product/poldanmig.png" alt="" class="img-thumbnail">
                      </a>
                      <h4>POLDAN MIG</h4>
                      </div>
                    <div class="col-sm-4" style="text-align: center;">
                      <a href="">
                          <img src="img/product/sanaflu.png" alt="" class="img-thumbnail">
                      </a>
                      <h4>SANAFLU</h4>
                      </div>
                    <div class="col-sm-4" style="text-align: center;">
                      <a href="">
                          <img src="img/product/pro_pro_PACKSHOOT_Sanaflu_Forte.png" alt="" class="img-thumbnail">
                      </a>
                      <h4>SANAFLU FORTE</h4>
                      </div>
                    <div class="col-sm-4" style="text-align: center;">
                      <a href="">
                          <img src="img/product/pro_PACKSHOOT_Sanaflu_Plus_Batuk.png" alt="" class="img-thumbnail">
                      </a>
                      <h4>SANAFLU PLUS COUGH (CAPLET)</h4>
                      </div>
                    </div>    
                  </div>



          <section class="about" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2>About</h2>
                        <hr>
                        <p>PT Sanbe Farma merupakan group perusahaan farmasi yang melaksanakan pengembangan formulasi, produksi, dan penjualan produk obat yang aman dan berkualitas tinggi. <strong>PT. Sanbe Farma didirikan oleh bapak Jahja Santosa Apt pada tahun 1975.</strong></p>
                        <p>Unit yang pertama kali berdiri adalah Unit I yang bertempat di Leuwigajah. Pada mulanya Unit I ini memproduksi obat steril dan obat non steril. Pada tahun 1985 Sanbe mulai memproduksi obat-obatan β-laktam dan sefalosporin. Produksi antibiotik ini dilakukan di pabrik Unit II yang juga terletak di Leuwigajah.</p>
                        <p>Memasuki tahun 1992, Sanbe Farma mulai memproduksi obat-obatan warung atau obat over the counter (OTC), salah satunya  adalah Sanaflu.</p>
                        <p>Setelah tiga puluh tahun, Sanbe Farma menjadi perusahaan farmasi terbesar di Indonesia dan menurut IMS report tahun 2007. Sanbe Farma menempati posisi teratas dari 205 industri farmasi, termasuk 41 industri multinasional di Indonesia. Dari lima belas produk ethical yang diresepkan di Indonesia, empat produk berasal dari Sanbe Farma.</p>
                        <p>Sanbe Farma mempunyai 22 pusat distribusi di seluruh Indonesia. Seluruh produk Sanbe Farma dipasarkan melalui distributor tunggalnya, PT Bina San Prima. Dengan demikian, distribusi produk dapat terkoordinasi dengan baik.</p>
                        <p>Kegiatan operasional Sanbe Farma dilaksanakan oleh tiga unit pabrik. Unit I dan II terletak di Kawasan Industri Leuwigajah sedangkan Unit III berada di Kawasan Industri Cimareme.</p>
                        </div>
                    </div>
                    <br>
           <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Contact</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" class="form-control" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Masukkan Email">
                        </div>
                        <div class="form-group">
                            <label for="telp">No Telepon</label>
                            <input type="tel" id="telp" class="form-control" placeholder="Masukkan no telepon">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" rows="10" placeholder="Masukkan Pesan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br>




<!--Footer-->
<footer>
  <div class="container-fluid">
      <small>Copyright&copy;2020 By 18111387_RickySubagio_TIFRP18CIDA</small>
  </div>
</footer>          

<script src="bootstrap/js/jquery-3.5.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/script.js"></script>
</body>
</html>