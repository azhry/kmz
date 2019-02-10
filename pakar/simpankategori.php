<?php
include"koneksi.php";
	$nama_kategori=$_POST['nama_kategori'];

	$query="INSERT INTO kategori(`nama_kategori`) VALUES ('$nama_kategori')";
	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil disimpan');document.location='datakategori.php'</script>";
?>