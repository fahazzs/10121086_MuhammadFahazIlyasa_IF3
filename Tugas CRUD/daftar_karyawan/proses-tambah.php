<?php
include "../koneksi.php";
?>

<?php

$nik			= $_POST['nik'];
$nama_karyawan	= $_POST['nama_karyawan'];
$jabatan		= $_POST['jabatan'];
$tgl_masuk		= $_POST['tgl_masuk'];
$divisi			= $_POST['divisi'];
$gaji			= $_POST['gaji'];
$tunjangan			= $_POST['tunjangan'];

$query_insert= "INSERT INTO tb_karyawan
            (nik,nama_karyawan,jabatan,tgl_masuk,divisi,gaji,tunjangan)VALUES ('$nik',
        '$nama_karyawan',
        '$jabatan',
        '$tgl_masuk',
        '$divisi',
        '$gaji',
        '$tunjangan')";


$query_insert_ok =mysqli_query($connect,$query_insert);


if ($query_update_ok){
    header("Location: home.php?status=SuksesUpdate");
    exit(); // Menghentikan eksekusi skrip PHP lebih lanjut
} else {
    header("Location: home.php?status=GagalUpdate");
    exit(); // Menghentikan eksekusi skrip PHP lebih lanjut
}

?> 