<?php
include"koneksi.php";
	$id=$_POST['id_explicit'];
	$nama=$_POST['nama'];
	$isi=$_POST['isi_komentar'];
	$tgl=$_POST['tgl_komentar'];

	$query="INSERT INTO komentarexplicit(`id_explicit`,`nama`,`isi_komentar`,`tgl_komentar`) VALUES ('$id','$nama','$isi','$tgl')";
	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script> window.history.go(-1) </script>";
?>