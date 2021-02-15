<?php
require_once "koneksi.php";
$id_obat= $_POST["id_obat"];
$merk_obat = $_POST["merk_obat"];
$kode_obat= $_POST["kode_obat"];
$harga_obat= $_POST["harga_obat"];

$q = $database_connection->prepare("UPDATE `data_obat` SET `merk_obat` = ?, 
`kode_obat` = ?, `harga_obat` = ? WHERE `data_obat`.`id_obat` = ?");
$q->execute([$merk_obat, $kode_obat, $harga_obat, $id_obat]);
header("Location: ../obat.php");
?>