<?php
include"koneksi.php";

	$id=$_POST['id_explicit'];
	$idk=$_POST['id_kategori'];
	$judul=$_POST['judul'];
	$keterangan=$_POST['keterangan'];

	$lokasi_file=$_FILES['dokumen']['tmp_name'];
	$nama_file=basename($_FILES['dokumen']['name']);

	$folder="../folder/$nama_file";

	if(move_uploaded_file($lokasi_file, "$folder"))
	{
		$query="UPDATE explicit SET `judul`='$judul',`keterangan`='$keterangan',`dokumen`='$folder',`nama_dokumen`='$nama_file',`id_kategori`='$idk' WHERE `id_explicit`='$id'";
		$hasil=mysqli_query($koneksi,$query);
		if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil diedit');document.location='lihatpengetahuanexplicit.php'</script>";
	}
?>