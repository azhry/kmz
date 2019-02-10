<?php
include"koneksi.php";
	$nama_gejala=$_POST['nama_gejala'];
	$id_kategori=$_POST['id_kategori'];
	$bobot_gejala=$_POST['bobot_gejala'];

	$query="INSERT INTO gejala(`nama_gejala`,`bobot_gejala`,`id_kategori`) VALUES ('$nama_gejala','$bobot_gejala','$id_kategori')";
	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil disimpan');document.location='datagejala.php'</script>";
?>