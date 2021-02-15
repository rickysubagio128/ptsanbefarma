<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sanbe Farma</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/bx/css/boxicons.min.css">
    <link rel="stylesheet" href="styleeIndex.css">   
</head>
<style>
    :root{
    --first-color: #12192C;
    --text-color: #8590AD;
    }

    .section{
    padding: 50px 0;
	}
	section h3{
		text-align: center;
		padding: 20px 0;
		color:  #8590AD;
		margin-bottom: 20px;
	}
	.about p{
		color: #666;
		word-spacing: 2px;
		line-height: 25px;
	}
	.Contact{
		background-color: #f9f9f9;
	}
	.box:after{
		content: '';
		display: block;
		clear: both;
	}
	.box{
		color: #8590AD;
	}
	.box .col-4{
		width: 25%;
		padding: 20px;
		box-sizing: border-box;
		text-align: center;
		float: left;
	}
	.icon{
		width: 70px;
		height: 70px;
		border:1px solid;
		border-radius: 50%;
		text-align: center;
		line-height: 70px;
		font-size: 20px;
		margin: 0 auto;
	}
	.box .col-4 h4{
		margin: 10px 0;
	}
	footer {
		padding: 30px 0;
		background-color: rgb(0, 0, 0);
		color: white;
		text-align: center;
	}
</style>
<body>

    <header>
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="container">
                <!-- navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Sanbe Farma</a>
                </div>

                <!-- navbar-collapse -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="banner" style="background-image: url(img/unit3.jpg);"></div>
                    <div class="carousel-caption">
                        <h2 class="animated bounceInRight" style="animation-delay: 1s">Welcome <span>Sanbe Farma</span></h2>
                        <h3 class="animated bounceInLeft" style="animation-delay: 2s">Your Partner For Global Healthcare</h3>
                        <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#contact">Contact us</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="banner" style="background-image: url(img/award.jpg);"></div>
                    <div class="carousel-caption">
                        <h2 class="animated slideInDown" style="animation-delay: 1s">We Are</h2>
                        <h2 class="animated slideInDown" style="animation-delay: 1s"><span>Sanbe Farma</span></h2>
                        <h3 class="animated fadeInUp" style="animation-delay: 2s">THE FIRST WHO GMP ACCREDITATION FOR PENICILLIN PLANT AND STRILE PREPATIONS PLANT OF PT SANBE FARMA IN INONESIA</h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="#contact">Contact us</a></p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- about-->
        <section class="about">
            <div class="container">
                <h3>About Us</h3>
                    <p>PT Sanbe Farma merupakan group perusahaan farmasi yang melaksanakan pengembangan formulasi, produksi, dan penjualan produk obat yang aman dan berkualitas tinggi. <strong>PT. Sanbe Farma didirikan oleh bapak Jahja Santosa Apt pada tahun 1975.</strong></p>
                    <p>Unit yang pertama kali berdiri adalah Unit I yang bertempat di Leuwigajah. Pada mulanya Unit I ini memproduksi obat steril dan obat non steril. Pada tahun 1985 Sanbe mulai memproduksi obat-obatan β-laktam dan sefalosporin. Produksi antibiotik ini dilakukan di pabrik Unit II yang juga terletak di Leuwigajah.</p>
                    <p>Memasuki tahun 1992, Sanbe Farma mulai memproduksi obat-obatan warung atau obat over the counter (OTC), salah satunya  adalah Sanaflu.</p>
                    <p>Setelah tiga puluh tahun, Sanbe Farma menjadi perusahaan farmasi terbesar di Indonesia dan menurut IMS report tahun 2007. Sanbe Farma menempati posisi teratas dari 205 industri farmasi, termasuk 41 industri multinasional di Indonesia. Dari lima belas produk ethical yang diresepkan di Indonesia, empat produk berasal dari Sanbe Farma.</p>
                    <p>Sanbe Farma mempunyai 22 pusat distribusi di seluruh Indonesia. Seluruh produk Sanbe Farma dipasarkan melalui distributor tunggalnya, PT Bina San Prima. Dengan demikian, distribusi produk dapat terkoordinasi dengan baik.</p>
                    <p>Kegiatan operasional Sanbe Farma dilaksanakan oleh tiga unit pabrik. Unit I dan II terletak di Kawasan Industri Leuwigajah sedangkan Unit III berada di Kawasan Industri Cimareme.</p>
            </div>
        </section>

        <!-- Contact -->
        <section class="contact">
        <div class="container">
            <h3>Contact</h3>
            <div class="box">
                <div class="col-4">
                    <div class="icon"><i class="bx bxl-facebook"></i></div>
                    <h4>PT.SANBE FARMA</h4>
                </div>
                <div class="col-4">
                    <div class="icon"><i class="bx bxs-phone"></i></div>
                    <h4>022-42077251</h4>
                </div>
                <div class="col-4">
                    <div class="icon"><i class="bx bxl-instagram"></i></div>
                    <h4>PT.SANBE FARMA</h4>
                </div>
                <div class="col-4">
                    <div class="icon"><i class="bx bxs-envelope"></i></div>
                    <h4>recruitment.1@sanbe-farma.com</h4>
                </div>
            </div>
        </div>
        </section>

        <!--Footer-->
        <footer>
            <div class="container">
                <small>Copyright&copy;2020 By 18111387_RickySubagio_TIFRP18CIDA</small>
            </div>
        </footer> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/script.js"></script>

  
 </header> 
</body>
</html>
