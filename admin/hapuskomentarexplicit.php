<?php
include'koneksi.php';
	$idk = $_GET['id_komentarexplicit'];

	$query="DELETE FROM komentarexplicit WHERE id_komentarexplicit='$idk'";
	$hasil=mysqli_query($koneksi,$query);

	if(!$hasil)
	{
		die(mysqli_error($koneksi));
	}
		echo "<script> window.history.go(-1) </script>";
?>