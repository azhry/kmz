<?php
include"koneksi.php";
	$idk=$_POST['id_kategori'];
	$nama_kategori=$_POST['nama_kategori'];
	
	$query="UPDATE kategori SET `nama_kategori`='$nama_kategori' WHERE `id_kategori`='$idk'";

	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil diedit');document.location='datakategori.php'</script>";
?>