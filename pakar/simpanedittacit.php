<?php
include"koneksi.php";
	
	$id=$_POST['id_tacit'];
	$idk=$_POST['id_kategori'];
	$judul=$_POST['judul'];
	$masalah=$_POST['masalah'];
	$solusi=$_POST['solusi'];
	
	$query="UPDATE tacit SET `judul`='$judul',`masalah`='$masalah',`solusi`='$solusi',`id_kategori`='$idk' WHERE `id_tacit`='$id'";

	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil diedit');document.location='lihatpengetahuantacit.php'</script>";
?>