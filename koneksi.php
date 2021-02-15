<?php
$database_hostname = "ftpupload.net";
$database_username ="epiz_27936635";
$database_password = "VXXgEKNXYNcpeZX";
$database_name = "epiz_27936635_sanbe";

try{
 //sintaks berhasil?  
 $database_connection= new PDO("mysql:host=$database_hostname;dbname=$database_name",
 $database_username, $database_password); 
 $cek = "Koneksi Berhasil";
//  echo $cek;
}catch(PDOException $x){
die($x->getMessage());
}
?>