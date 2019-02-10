<?php
include"koneksi.php";
	
	$id=$_GET['id_kategori'];
	
	$query="DELETE FROM kategori WHERE `id_kategori`='$id'";

	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil dihapus');document.location='datakategori.php'</script>";
?>