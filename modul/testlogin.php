<?php
session_start();

include ("koneksi.php");
date_default_timezone_set('Asia/Jakarta');

$username = $_POST['username'];
$password = $_POST['password'];


/*if (empty($username) && empty($password)) {
	echo "<script>alert('Username & Password Salah');document.location='index.php'</script>";

} else if (empty($username)) {
	echo "<script>alert('Username Salah');document.location='index.php'</script>";

} else if (empty($password)) {
	echo "<script>alert('Password Salah');document.location='index.php'</script>";
}
*/
$query="select * from users where username='$username' and password='$password'";
$hasil=mysqli_query($koneksi,$query);
$has=mysqli_fetch_array($hasil);

if (mysqli_num_rows($hasil) == 1) {
	$_SESSION['id_user']	= $has['id_user'];
	$_SESSION['username']	= $has['username'];
	$_SESSION['password']	= $has['password'];
	$_SESSION['nama']		= $has['nama'];
	$_SESSION['jabatan']	= $has['jabatan'];

	if($has['jabatan']=="tim validasi")
	{
		echo "<script>document.location='../pakar/index.php'</script>";
	}
	else if($has['jabatan']=="pengguna")
	{
		echo "<script>document.location='index.php'</script>";
	}
	else if($has['jabatan']=="admin")
	{
		echo "<script>document.location='../admin/index.php'</script>";
	}
	else if($has['jabatan']=="manager")
	{
		echo "<script>document.location='../manager/index.php'</script>";
	}
}
	else
	{
	echo "<script>alert('Username dan Password Salah');document.location='../index.php'</script>";
	}

?>