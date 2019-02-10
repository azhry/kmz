<?php
session_start();
include "koneksi.php";
if(!isset($_POST['gejala']))
{
	echo"<script>alert('Anda belum memilih masalah di form Problem Solving');</script>";
	echo"<script>window.location=history.go(-1);</script>";	
}
else
{
$gejala = $_POST['gejala'];
$jumlah_dipilih = count($gejala);

$a=mysqli_query($koneksi, "select * from solusi");
$hasil=0;
while($b=mysqli_fetch_array($a))
{	
	$bobot=0;
	$total_bobot=0;
	$kemiripan=0;
	$bagi=0;
	$c=mysqli_query($koneksi, "select * from masalah where id_solusi='$b[id_solusi]'");
	while($d=mysqli_fetch_array($c))
	{
	for($x=0;$x<$jumlah_dipilih;$x++)
	{
		if($d['id_gejala']==$gejala[$x])
		{
			$e=mysqli_query($koneksi, "select * from gejala where id_gejala='$d[id_gejala]'");
			$f=mysqli_fetch_array($e);
			$bobot=$bobot+$f['bobot_gejala'];
			$bagi++;
		}
		$g=mysqli_query($koneksi, "select * from gejala where id_gejala='$gejala[$x]'");
		while($h=mysqli_fetch_array($g))
		{
		$total_bobot=$total_bobot+$h['bobot_gejala'];
		}
	}
	
	
	$kemiripan=$bobot/($total_bobot/$bagi);
	if($kemiripan > $hasil)
	{
		$hasil=$kemiripan;
		$id_solusi=$d['id_solusi'];
	}
	}
}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome | Solusi</title>

    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="../css/materialicon.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-pink">
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand">PT. BANIAH RAHMAT UTAMA</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nama'];?></div>
                     <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login As : <?php echo $_SESSION['username'];?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">KNOWLEDGE MANAGEMENT SYSTEM</li>
                    <li>
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>HOME</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">people</i>
                            <span>DATA PEGAWAI</span>
                        </a>
                         <ul class="ml-menu">
                            <li>
                                <a href="inputpegawai.php">
                                    <span>Input Pegawai</span>
                                </a>
                            </li>
                            <li>
                                <a href="daftarpegawai.php">
                                    <span>Daftar Pegawai</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">done</i>
                            <span>VALIDASI PENGETAHUAN</span>
                        </a>
                         <ul class="ml-menu">
                            <li>
                                <a href="#">
                                    <span>Pengetahuan Tacit</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Pengetahuan Explicit</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pengetahuantacit.php">
                            <i class="material-icons">text_fields</i>
                            <span>PENGETAHUAN TACIT</span>
                        </a>
                    </li>
                    <li>
                        <a href="pengetahuanexplicit.php">
                            <i class="material-icons">explicit</i>
                            <span>PENGETAHUAN EXPLICIT</span>
                        </a>
                    </li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_headline</i>
                            <span>PENGETAHUAN SAYA</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Pengetahuan Tacit</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="inputtacit.php">
                                            <span>Input Data Tacit</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="lihatpengetahuantacit.php">
                                            <span>Lihat Data Tacit</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Pengetahuan Explicit</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="inputexplicit.php">
                                            <span>Input Data Explicit</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="lihatpengetahuanexplicit.php">
                                            <span>Lihat Data Explicit</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="problemsolving.php">
                            <i class="material-icons">vpn_key</i>
                            <span>PROBLEM SOLVING</span>
                        </a>
                    </li>
                    <li>
                        <a href="searching.php">
                            <i class="material-icons">search</i>
                            <span>SEARCHING</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
           
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
          
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-pink" >
                            <h2>
                                PROBLEM SOLVING
                            </h2>
                        </div>
                <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                        <div class="header bg-deep-blue">
                            <h2>
                                Masalah
                            </h2>
                        </div>
                        <div class="body">
                            <?php 
							$no=0;
							for($x=0;$x<$jumlah_dipilih;$x++)
							{
								$no++;
								$sql=mysqli_query($koneksi, "select * from gejala where id_gejala='$gejala[$x]'");
								$data=mysqli_fetch_array($sql);
								echo "$no";
								echo ".) ";
								echo "$data[nama_gejala]";
								echo "<br>";
							}
							?>
                        </div>
                        </div>
                    </div>
					 <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                        <div class="header bg-deep-blue">
                            <h2>
                                Solusi
                            </h2>
                        </div>
                        <div class="body">
                            <?php 
							$sql=mysqli_query($koneksi, "select * from solusi where id_solusi='$id_solusi'");
							$data=mysqli_fetch_array($sql);
							echo "<b>Nama Solusi</b>";
							echo ' : '.$data['nama_solusi'];
							echo "<br>";
							echo "<b>Solusi Masalah</b>";
							echo ' : '.$data['solusi_masalah'];
							echo "<br>";
							echo "<b>Kemiripan</b>";
							echo ' : '.$hasil;
							?>
                        </div>
                        </div>
                    </div>
                   
               
                    </div>
                    </div>
                </div>
            </div>
           


    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>

