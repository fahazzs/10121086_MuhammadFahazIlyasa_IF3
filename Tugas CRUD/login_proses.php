<?php

session_start();

include 'koneksi.php';

$nama_karyawan	= $_POST['nama_karyawan'];
$password	= $_POST['password'];

$data	= mysqli_query($connect,"select * from tb_user where nama_karyawan='$nama_karyawan' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){

	$row = mysqli_fetch_assoc($data);
	$_SESSION['nama_karyawan'] = $nama_karyawan;
	$_SESSION['level'] = $row['nama_karyawan'];
	$_SESSION['status'] = "login";

	if($row['level']=="1"){
		header("location:daftar_karyawan/home.php");
	}else{
		header("location:daftar_karyawan/home.php");
	}
}else{
	header("location:index.php?pesan=gagal");
}

?>