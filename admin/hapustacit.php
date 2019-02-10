<?php
include"koneksi.php";
	
	$id=$_GET['id_tacit'];
	
	$query="DELETE FROM tacit WHERE `id_tacit`='$id'";

	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil dihapus');document.location='lihatpengetahuantacit.php'</script>";
?>