<?php
/*
|--------------------------------------------------------------------------
| Konfigurasi Database
|--------------------------------------------------------------------------
|
|   Aplikasi Sistem Informasi Rumah Sakit Sederhana
|   by Dendi Abdul Rohim 
|   dendicious@gmail.com
|   dendicous.com
|
*/
$host="localhost";
$user="root";
$pass="";
$db="test";

$koneksi=mysqli_connect($host, $user, $pass);
mysqli_select_db($koneksi,$db);
	 
?>