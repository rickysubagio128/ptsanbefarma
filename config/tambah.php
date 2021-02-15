<?php
require_once "koneksi.php";

$merk_obat= $_POST["merk_obat"];
$kode_obat= $_POST["kode_obat"];
$harga_obat= $_POST["harga_obat"];

$q = $database_connection->prepare("INSERT INTO `data_obat` (`id_obat`, `merk_obat`, 
`kode_obat`, `harga_obat`) VALUES (NULL, ?, ?, ?);");
$q->execute([$merk_obat, $kode_obat, $harga_obat]);
header("Location: ../obat.php");
?>