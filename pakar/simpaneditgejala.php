<?php
include"koneksi.php";
	$idg=$_POST['id_gejala'];
	$nama_gejala=$_POST['nama_gejala'];
	$id_kategori=$_POST['id_kategori'];
	$bobot_gejala=$_POST['bobot_gejala'];

	$query="UPDATE gejala SET `nama_gejala`='$nama_gejala',`bobot_gejala`='$bobot_gejala',`id_kategori`='$id_kategori' WHERE `id_gejala`='$idg'";

	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil disimpan');document.location='datagejala.php'</script>";
?>
