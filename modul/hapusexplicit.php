<?php
include"koneksi.php";
	
	$id=$_GET['id_explicit'];
	
	$query="DELETE FROM explicit WHERE `id_explicit`='$id'";

	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil dihapus');document.location='lihatpengetahuanexplicit.php'</script>";
?>