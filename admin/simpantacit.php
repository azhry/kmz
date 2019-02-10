<?php
include"koneksi.php";
	$id=$_POST['id_kategori'];
	$judul=$_POST['judul'];
	$masalah=$_POST['masalah'];
	$solusi=$_POST['solusi'];
	$tgl=$_POST['tgl_post'];
	$status=$_POST['status_validasi'];
	$pegawai=$_POST['pegawai'];

	$query="INSERT INTO tacit(`id_kategori`,`judul`,`masalah`,`solusi`,`tgl_post`,`status_validasi`,`pegawai`) VALUES ('$id','$judul','$masalah','$solusi','$tgl','$status','$pegawai')";
	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil disimpan');document.location='lihatpengetahuantacit.php'</script>";
?>