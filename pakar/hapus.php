<?php
include"koneksi.php";
	
	if (isset($_GET['id_kategori'])) {
		$id=$_GET['id_kategori'];
		$query="DELETE FROM kategori WHERE `id_kategori`='$id'";

	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil dihapus');document.location='datakategori.php'</script>";
	}
	
	if (isset($_GET['id_gejala'])) {
		$id=$_GET['id_gejala'];
		$query="DELETE FROM gejala WHERE `id_gejala`='$id'";

	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil dihapus');document.location='datagejala.php'</script>";
	}
	
	
	
?>