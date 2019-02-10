<?php
include"koneksi.php";
	
	$id=$_GET['id_user'];
	
	$query="DELETE FROM users WHERE `id_user`='$id'";

	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil dihapus');document.location='daftarpegawai.php'</script>";
?>