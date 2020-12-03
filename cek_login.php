<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'config.php';

// menangkap data yang dikirim dari form
$nama_petugas = $_POST['nama_petugas'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan nama_petugas dan password yang sesuai
$data = mysqli_query($mysqli,"select * from petugas where nama_petugas='$nama_petugas' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['nama_petugas'] = $nama_petugas;
	$_SESSION['status'] = 'login';
	header("location: data_penduduk.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>