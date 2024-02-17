<head>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<meta charset="utf-8">

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-6">
	<h3 class="text-center">TAMBAH DATA KARYAWAN</h3>

	<a class="btn btn-primary" href="home.php" role="button">Kembali</a>

	<form action="proses-tambah.php" method="post">
		<div class="form-group">
		<label for="nik">NIK</label>
			<input type="text" class="form-control" name="nik" id="nik">
		</div>

		<div class="form-group">
		<label for="nama_karyawan">Nama Karyawan</label>
			<input type="text" class="form-control" name="nama_karyawan" id="nama_karyawan">
		</div>

		<div class="form-group">
		<label for="jabatan">Jabatan</label>
			<input type="text" class="form-control" name="jabatan" id="jabatan">
		</div>

		<div class="form-group">
		<label for="tgl_masuk">Tgl Masuk</label>
			<input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk">
		</div>

		<div class="form-group">
		<label for="divisi">Divisi</label>
			<input type="text" class="form-control" name="divisi" id="divisi">
		</div>

		<div class="form-group">
		<label for="divisi">Gaji</label>
			<input type="text" class="form-control" name="gaji" id="gaji">
		</div>

		<div class="form-group">
		<label for="divisi">Tunjangan</label>
			<input type="text" class="form-control" name="tunjangan" id="tunjangan">
		</div>


		<button type="submit" class="btn btn-default">Submit</button>
	</form>

</div>
</div>
</body>

