<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>


	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>EDIT DATA KARYAWAN</title>



	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<meta charset="utf-8">

</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-6">
	<h3 class="text-center">Edit Data Karyawan</h3>
	<a class="btn btn-primary" href="home.php" role="button">Kembali</a>

<?php



$id_db_karyawan = $_GET['id'];

	$query_nilai ="select * from tb_karyawan where no='$id_db_karyawan'";
	$query_nilai_ok = mysqli_query($connect, $query_nilai);
	if (!$query_nilai_ok){
		printf("eror: %s\n",mysqli_error($connect));
		exit();
	}

	while ($query_result = mysqli_fetch_array($query_nilai_ok))
	
	{ 

	$nik_ok = $query_result['nik'];
	$nama_karyawan_ok = $query_result['nama_karyawan'];
	$jabatan_ok = $query_result['jabatan'];
	$tgl_masuk_ok = $query_result['tgl_masuk'];
	$divisi_ok = $query_result['divisi'];
	$gaji_ok = $query_result['gaji'];
	$tunjangan_ok = $query_result['tunjangan'];
	$gajibersih_ok = $query_result['gaji_bersih'];


?>

	<form method="POST" action="">
		<div class="form-group">
		<label for="nik">NIK</label>
			<input type="text" class="form-control" name="nik" id="nik_ok" value="<?php echo $nik_ok;?>">
		</div>

		<div class="form-group">
		<label for="nama_karyawan">Nama Karyawan</label>
			<input type="text" class="form-control" name="nama_karyawan" id="nama_karyawan_ok" value="<?php echo $nama_karyawan_ok;?>">
		</div>

		<div class="form-group">
		<label for="jabatan">Jabatan</label>
			<input type="text" class="form-control" name="jabatan" id="jabatan_ok" value="<?php echo $jabatan_ok;?>">
		</div>

		<div class="form-group">
		<label for="tgl_masuk">Tgl Masuk</label>
			<input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk_ok" value="<?php echo $tgl_masuk_ok;?>">
		</div>

		<div class="form-group">
		<label for="divisi">Divisi</label>
			<input type="text" class="form-control" name="divisi" id="divisi_ok" value="<?php echo $divisi_ok;?>">
		</div>

		<div class="form-group">
		<label for="divisi">Gaji</label>
			<input type="text" class="form-control" name="gaji" id="gaji_ok" value="<?php echo $gaji_ok;?>">
		</div>

		<div class="form-group">
		<label for="divisi">Tunjangan</label>
			<input type="text" class="form-control" name="tunjangan" id="tunjangan_ok" value="<?php echo $tunjangan_ok;?>">
		</div>

		

		<button type="submit" class="btn btn-default">Submit</button>
	</form>

</div>
</div>

<?php
}

?>

<?php
if (isset($_POST['nik'])){

$nik        	= $_POST['nik'];
$nama_karyawan	= $_POST['nama_karyawan'];
$jabatan		= $_POST['jabatan'];
$tgl_masuk		= $_POST['tgl_masuk'];
$divisi			= $_POST['divisi'];
$gaji 			= $_POST['gaji'];
$tunjangan		= $_POST['tunjangan'];
$gaji_bersih	= NULL;

$query_update= "
update tb_karyawan
set

	nik 			= '$nik',
	nama_karyawan 	= '$nama_karyawan',
	jabatan 		= '$jabatan',
	tgl_masuk 		= '$tgl_masuk',
	divisi 			= '$divisi',
	gaji 			= '$gaji',
	tunjangan 		= '$tunjangan',
	gaji_bersih		= '$gaji_bersih'

	where no ='$id_MuhammadFahazIlyasa_IF-3_Kepegawaian'
	";

$query_update_ok = mysqli_query($connect, $query_update);
	
if ($query_update_ok){
	header("Location: home.php?status=SuksesUpdate");
	exit(); // Menghentikan eksekusi skrip PHP lebih lanjut
} else {
	header("Location: home.php?status=GagalUpdate");
	exit(); // Menghentikan eksekusi skrip PHP lebih lanjut
}

}
else{
}
?>

</body>

</html>