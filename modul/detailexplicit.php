<?php 
    session_start();

    include'koneksi.php';
    $id=$_GET['id_explicit'];

    $query="SELECT * FROM explicit where id_explicit='$id'";
    $quer="SELECT * FROM komentarexplicit where id_explicit='$id'";
    $sql=mysqli_query($koneksi,$query);
    $sq=mysqli_query($koneksi,$quer);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome | Detail Pengetahuan Explicit</title>

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

<body class="theme-indigo">
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
                        <a href="pengetahuantacit.php">
                            <i class="material-icons">text_fields</i>
                            <span>PENGETAHUAN TACIT</span>
                        </a>
                    </li>
                    <li class="active">
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
            <div class="block-header">
                <h2><b>DATA PENGETAHUAN EXPLICIT</b></h2>
            </div>
            <!-- Body Copy -->
            <?php 
            foreach($sql as $data) :
            ?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-indigo" >
                            <h2>
                                <?php echo $data['judul'];?>
                            </h2>
                        </div>
                <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                        <div class="header bg-blue-grey">
                            <h2>
                                SOP
                            </h2>
                        </div>
                        <div class="body">
                            <?php echo $data['keterangan']?>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                        <div class="body">
                            <span class="pull-right"><a href="simpan.php?id_explicit=<?php echo $data['id_explicit'];?>"><i class="material-icons left" style="font-size:15px;">file_download</i> <?php echo $data['nama_dokumen']."</a>" ?></span>
                        </div>
                        </div>
                    </div>
                    <!-- Vertical Layout -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                KOMENTAR
                            </h2>
                        </div>
                        <div class="body">
                            <form action="tambahkomentarexplicit.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" class="form-control" name="id_explicit" value="<?php echo $data['id_explicit']; ?>" placeholder="Masukkan Komentar">
                                        <input type="hidden" class="form-control" name="nama" value="<?php echo $_SESSION['nama']; ?>" placeholder="Masukkan Komentar">
                                        <input type="text" name="isi_komentar" id="email_address" class="form-control" placeholder="Masukkan Komentar">
                                        <input type="hidden" class="form-control" name="tgl_komentar" value="<?php echo date("Y-m-d")?>" placeholder="Masukkan Komentar">
                                    </div>
                                </div>

                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SEND</button>
                            </form>
                            <br>
                            <?php foreach ($sq as $k):
                            ?>
                            <?php if($_SESSION['nama'] == $k['nama']) {?> 
                            <div class="image">
                                <img src="../images/user.png" width="48" height="48" alt="User" />
                                <span class='description'> <font class='timeago'><?php echo $k['nama']?></font></span>
                                &nbsp;|
                                <span class='description'> <font class='timeago'><?php echo $k['tgl_komentar']?></font></span>
                                <a href="hapuskomentarexplicit.php?id_komentarexplicit=<?php echo $k['id_komentarexplicit'];?>" style="align:right" class="btn btn-danger m-t-15 waves-effect pull-right"><i class="material-icons">delete_forever</i></a>
                            </div>
                            
                            <hr>
                            <p>
                                <?php echo $k['isi_komentar']?>
                            </p>
                            <hr>
                        <?php } else {?>
                            <div class="image">
                                <img src="../images/user.png" width="48" height="48" alt="User" />
                                <span class='description'> <font class='timeago'><?php echo $k['nama']?></font></span>
                                &nbsp;|
                                <span class='description'> <font class='timeago'><?php echo $k['tgl_komentar']?></font></span>
                            </div>
                            
                            <hr>
                            <p>
                                <?php echo $k['isi_komentar']?>
                            </p>
                            <hr>
                        <?php }?>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            <!-- #END# Vertical Layout -->
                    </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>


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
