<?php
session_start();
if(empty($_SESSION['id_user']))
{
    header('location:modul/login.php');   
}
else
{
    include'koneksi.php';
}
$id=$_GET['id_user']; 
    $query="SELECT * FROM users WHERE id_user='$id'";
    $sql=mysqli_query($koneksi,$query);
    $ft=mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome | Edit Pegawai</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

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

    <!-- Bootstrap Select Css -->
    <link href="../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
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
                            <li class="active">
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
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><b>EDIT DATA PEGAWAI</b></h2>
                        </div>
                        <div class="body">
                            <form action="simpaneditpegawai.php" id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="hidden" class="form-control" name="id_user" value="<?php echo $ft['id_user']?>" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="no_badge" value="<?php echo $ft['no_badge']?>" required readonly>
                                        <label class="form-label">Masukkan No Badge</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" value="<?php echo $ft['nama']?>" required>
                                        <label class="form-label">Masukkan Nama</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php if($ft['jenis_kelamin']=='Laki-laki') {

                                    ?>
                                    <input type="radio" name="jenis_kelamin" value="Laki-laki" id="male" class="with-gap" checked>
                                    <label for="male">Laki-laki</label>

                                    <input type="radio" name="jenis_kelamin" value="Perempuan" id="female" class="with-gap">
                                    <label for="female" class="m-l-20">Perempuan</label>
                                <?php } else { ?>
                                    <input type="radio" name="jenis_kelamin" value="Laki-laki" id="male" class="with-gap">
                                    <label for="male">Laki-laki</label>

                                    <input type="radio" name="jenis_kelamin" value="Perempuan" id="female" class="with-gap" checked="">
                                    <label for="female" class="m-l-20">Perempuan</label>
                                <?php } ?>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $ft['tempat_lahir']?>" required>
                                        <erempuanlabel class="form-label">Masukkan Tempat Lahir</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $ft['tanggal_lahir']?>" required>
                                        <label class="form-label">Masukkan Tanggal Lahir (ex:1994-06-23)</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="telepon" value="<?php echo $ft['telepon']?>" required>
                                        <label class="form-label">Masukkan Telepon</label>
                                    </div>
                                </div>
                                <img src="../photo/<?php echo $ft['foto']?>" width="50" height="50">
                                <br><br>
                                <input type="file" class="form-control" name="foto" value="<?php echo $ft['foto']?>">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label class="form-label">Masukkan Foto</label>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label class="form-label">Hak Akses</label>
                                    <br><br>
                                    </div>
                                    <select name="username" class="form-control" style="width: 100%;">
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                        <option value="Pakar">Pakar</option>
                                        <option value="Kepala Cabang">Kepala Cabang</option>
                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label class="form-label">Jabatan</label>
                                    <br><br>
                                    </div>
                                    <select name="jabatan" class="form-control" style="width: 100%;">
                                        <option value="admin">Admin</option>
                                        <option value="pengguna">Pengguna</option>
                                        <option value="tim validasi">Tim Validasi</option>
                                        <option value="manager">Manager</option>
                                    </select>
                                </div>
                                <br>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
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

    <!-- Ckeditor -->
    <script src="../plugins/ckeditor/ckeditor.js"></script>

    <!-- TinyMCE -->
    <script src="../plugins/tinymce/tinymce.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/forms/editors.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>