<?php
include"koneksi.php";
	$nob=$_POST['no_badge'];
	$nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$telepon=$_POST['telepon'];
	$foto=$_POST['foto'];
	$username=$_POST['username'];
	$jabatan=$_POST['jabatan'];

	$query="INSERT INTO users (`no_badge`,`nama`,`jenis_kelamin`,`tempat_lahir`,`tanggal_lahir`,`telepon`,`foto`,`username`,`jabatan`) VALUES ('$nob','$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$telepon','$foto','$username','$jabatan')";
	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil disimpan');document.location='daftarpegawai.php'</script>";
?>