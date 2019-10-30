<?php
$hostname = "localhiost"
$username ="root"
$password =""
$database ="toko_sayur"

$con = mysqli_connect($hostname,$username,$password,$database);
if ($con->construct_error){
	echo "gagal koneksi ke database :" .$con-> constant_error .")";
}
