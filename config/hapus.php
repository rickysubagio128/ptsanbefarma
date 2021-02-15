<?php
require_once "koneksi.php";
$id_obat= $_POST["id_obat"];
echo $id_obat;

$q = $database_connection->prepare("DELETE FROM `data_obat` WHERE `data_obat`.`id_obat` = ?");
$q->execute([$id_obat]);
header("Location: ../obat.php");
?>