<?php
session_start();
if (isset($_SESSION['username']) === false) { // cek session apakah kosong(belum login) maka alihkan ke login.php
    header('Location: login.php');
}
$id_obat = $_POST["id_obat"];
$merk_obat = $_POST["merk_obat"];
$kode_obat = $_POST["kode_obat"];
$harga_obat = $_POST["harga_obat"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script language="Javascript" src="modul/bootstrap-4.3.1-dist/js/bootstrap.min.js"> </script>
    <script src="modul/JQuery/jquery.min.js"></script>

    <!-- CSS dan JS DataTable -->
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>


<body>
	<!-- buat class container -->

	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<img src="image/sttb.jpg">

			<!-- membuat form -->
			<form action="config/edit.php" method="POST" class="col-lg-6">
				<h5>Registrasi</h5>
				<!-- buat row form (baris ke 1 pada form) -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">Merk Obat</label>
						<input type="text" class="form-control" name="merk_obat" value="<?php echo $merk_obat;?>">
					</div>
					<div class="form-group col-md-6">
						<label for="contoh2">Kode Obat</label>
						<input type="text" class="form-control" name="kode_obat" value="<?php echo $kode_obat?>">
					</div>
                    <div class="form-group col-md-6">
						<label for="contoh2">Harga Obat</label>
						<input type="text" class="form-control" name="harga_obat" value="<?php echo $harga_obat?>">
					</div>
				</div>
				<!-- end baris 1 pada form -->

				<!-- end baris 2 pada form -->
				<input type="hidden" name="id_obat" value="<?php echo $id_obat;?>"/>
				<button type="submit" class="btn btn-primary">Edit</button>
			</form>

			<!-- end form -->
		</div>
	</div>
	<!-- end container -->
</body>

</html>