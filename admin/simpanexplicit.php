<?php
include"koneksi.php";
	$id=$_POST['id_kategori'];
	$judul=$_POST['judul'];
	$keterangan=$_POST['keterangan'];
	$tgl=$_POST['tgl_post'];
	$status=$_POST['status_validasi'];
	$pegawai=$_POST['pegawai'];

	$lokasi_file=$_FILES['dokumen']['tmp_name'];
	$nama_file=basename($_FILES['dokumen']['name']);

	$folder="../folder/$nama_file";

	if(move_uploaded_file($lokasi_file, "$folder"))
	{

	$query="INSERT INTO explicit(`id_kategori`,`tgl_post`,`judul`,`keterangan`,`dokumen`,`nama_dokumen`,`pegawai`,`status_validasi`) VALUES ('$id','$tgl','$judul','$keterangan','$folder','$nama_file','$pegawai','$status')";
	$hasil=mysqli_query($koneksi,$query);
	if (!$hasil)
	{
		die(mysqli_error($koneksi));
	}
	echo "<script>alert('data berhasil disimpan');document.location='lihatpengetahuanexplicit.php'</script>";
	}

?>