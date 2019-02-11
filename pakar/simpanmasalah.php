<?php 
include 'koneksi.php';

$id_solusi = $_POST['id_solusi'];
$sql = 'INSERT INTO masalah(id_solusi) VALUES(' . $id_solusi . ')';
if (mysqli_query($koneksi, $sql))
{
	$id_masalah = mysqli_insert_id($koneksi);
	foreach ($_POST['id_gejala'] as $id_gejala)
	{
		$sql = 'INSERT INTO gejala_masalah(id_masalah, id_gejala) VALUES('. $id_masalah .', '. $id_gejala .')';
		mysqli_query($koneksi, $sql);
	}
}

header('Location: datamasalah.php');