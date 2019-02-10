<?php
include"koneksi.php";
	$id=$_POST['id_user'];
	$nob=$_POST['no_badge'];
	$nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$telepon=$_POST['telepon'];
	$foto=$_POST['foto'];
	$username=$_POST['username'];
	$jabatan=$_POST['jabatan'];

	$query="UPDATE users SET `id_user`='$id',`no_badge`='$nob',`nama`='$nama',`jenis_kelamin`='$jenis_kelamin',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',`telepon`='$telepon',`foto`='$foto',`username`='$username',`jabatan`='$jabatan' WHERE `id_user`='$id'";
	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil disimpan');document.location='daftarpegawai.php'</script>";
?>