<?php
include'koneksi.php';
	$idk = $_GET['id_komentartacit'];

	$query="DELETE FROM komentartacit WHERE id_komentartacit='$idk'";
	$hasil=mysqli_query($koneksi,$query);

	if(!$hasil)
	{
		die(mysqli_error($koneksi));
	}
		echo "<script> window.history.go(-1) </script>";
?>