<?php
session_start();
include 'config/data_obat.php';
if (isset($_SESSION['username']) === false) { // cek session apakah kosong(belum login) maka alihkan ke login.php
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>Data Produk Sanbe Farma</title>
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
                  <a class="nav-link" href="halamanUtama.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#product">Product</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="obat.php">Data Obat</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact.php">Contact</a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                  <img class = "img-profile rounded-circle" src="img/profile.svg" width="26" height="26">  <?php echo $_SESSION['username'];?>
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
          
    <br>

<body>
    <a href="tambah_obat.php">Tambah Obat</a>

    <div class="container">
        <table id="koneksi" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id Obat</th>
                    <th>Merk Obat</th>
                    <th>Kode Obat</th>
                    <th>Harga Obat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $q->fetch()) :
                    $id_obat = $row['id_obat'];
                    $merk_obat = $row['merk_obat'];
                    $kode_obat = $row['kode_obat'];
                    $harga_obat = $row['harga_obat'];
                ?>
                    <tr>
                        <td><?php echo $id_obat; ?></td>
                        <td><?php echo $merk_obat; ?></td>
                        <td><?php echo $kode_obat; ?></td>
                        <td><?php echo $harga_obat; ?></td>
                        <td>
                            <!-- form hapus -->
                            <form action="edit.php" method="POST">
                                <input type="hidden" name="id_obat" value="<?php echo $id_obat; ?>" />
                                <input type="hidden" name="merk_obat" value="<?php echo $merk_obat; ?>" />
                                <input type="hidden" name="kode_obat" value="<?php echo $kode_obat; ?>" />
                                <input type="hidden" name="harga_obat" value="<?php echo $harga_obat; ?>" />
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>

                            <!-- form delete -->
                            <form action="config/hapus.php" method="POST">
                                <input type="hidden" name="id_obat" value="<?php echo $id_obat; ?>" />
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                        </form>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#dataregister').DataTable({
            "aLengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ],
            "iDisplayLength": 5
        });
    });
</script>





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