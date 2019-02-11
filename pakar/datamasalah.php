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
    $query="SELECT * FROM masalah
            JOIN solusi ON masalah.id_solusi=solusi.id_solusi";
    $sql=mysqli_query($koneksi,$query);
    $mun=mysqli_num_rows($sql);
    
    $query = 'SELECT * FROM solusi';
    $solusi = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome | Data Masalah</title>
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

    <!-- JQuery DataTable Css -->
    <link href="../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

</head>

<body class="theme-brown">
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
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">vpn_key</i>
                            <span>PROBLEM SOLVING</span>
                        </a>
                         <ul class="ml-menu">
                            <li>
                                <a href="problemsolving.php">
                                    <span>Problem Solving</span>
                                </a>
                            </li>
                            <li>
                                <a href="datakategori.php" >
                                    <span>Data Kategori</span>
                                </a>
                            </li>
                            <li>
                                <a href="datagejala.php">
                                    <span>Data Gejala</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="datamasalah.php">
                                    <span>Data Masalah</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Data Revise</span>
                                </a>
                            </li>
                        </ul>
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
                <div class="block-header">
                            <h2>
                                <b>DATA MASALAH</b>
                            </h2>
                        </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form action="simpanmasalah.php" method="POST" enctype="multipart/form-data">
                               <div class="form-group">
                                <!-- <label>Kode Solusi</label>
                                 <div class="form-line">
                                     <input type="text" name="id_solusi" value="<?php echo $mun+1 ?>" id="solusi" class="form-control" placeholder="Enter here" disabled>
                                     </div>
                                </div> -->

                                <label>Gejala 1</label>
                                <div class="form-group 1" data-no='1'>
                                    <select name="id_gejala[]" class="form-control" style="width: 100%;">
                                        <?php 
                                        $sql_gejala = mysqli_query($koneksi, "SELECT * FROM gejala");
                                        foreach ($sql_gejala as $kat): ?>
                                        <option value="<?php echo $kat['id_gejala'] ?>"><?php echo $kat['nama_gejala'] ?></option>
                                    <?php endforeach;?>
                                    </select>
                                </div>

                                <div class="tambah1"></div>

                                <button class="btn btn-xs btn-primary tmbh" type="button" id="tambahGejala" data-number='1'><i class="fa fa-plus"></i> Tambah Gejala</button>
                                <br><br>
                                
                                <label>Nama Masalah</label>
                                <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="masalah" id="" class="form-control" placeholder="Enter here">
                                        </div>
                                </div>

                            <label>Solusi</label>
                            <select class="form-control" required name="id_solusi">
                                <option value="">Pilih Solusi</option>
                                <?php foreach ($solusi as $row): ?>
                                    <option value="<?= $row['id_solusi'] ?>"><?= $row['solusi_masalah'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <!-- <textarea id="ckeditor" name="solusi">
                                
                            </textarea> -->
                            <br>
                           
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>

                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gejala</th>
                                            <th>Masalah</th>
                                            <th>Solusi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no=1; foreach ($sql as $data): 
                                        ?>
                                        <tr>
                                            <td><?php echo $no++?></td>
                                            <td>
                                            <table>
                                                <tr style="background:orange">
                                                <td colspan="2"><b>Gejala</b></td>
                                                <td><b>Bagian</b></td>
                                                </tr>

                                                <?php 
                                                 $quer="SELECT * FROM gejala_masalah JOIN gejala ON gejala_masalah.id_gejala = gejala.id_gejala JOIN kategori ON gejala.id_kategori = kategori.id_kategori WHERE gejala_masalah.id_masalah=" . $data['id_masalah'];
                                                $sq=mysqli_query($koneksi,$quer);
                                                echo(mysqli_error($koneksi));
                                                foreach($sq as $gm):
                                                ?>
                                                <tr>
                                                    <td width="10px"><?php echo $gm['id_gejala'];?></td>
                                                    <td><?php echo $gm['nama_gejala'];?></td>
                                                    <td><?php echo $gm['nama_kategori'];?></td>
                                                </tr>
                                                <?php endforeach;?>
                                            </table>
                                            </td>
                                            <td>
                                            <?php echo $data['id_solusi'];?> | <b><?php echo $data['nama_solusi'];?></b>
                                            </td>
                                            <td><?php echo $data['solusi_masalah'];?></td>
                                           
                                            <td>
                                                <!-- <i class="material-icons left"><a href="editkategori.php?id_kategori=<?php echo $data['id_kategori'];?>">mode_edit</a></i> &nbsp;&nbsp; <i class="material-icons left"><a href="hapuskategori.php?id_kategori=<?php echo $data['id_kategori'];?>">delete</a></i> -->
                                            </td>
                                        </tr>
                                            <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CKEditor -->
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

    <!-- Jquery DataTable Plugin Js -->
    <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/tables/jquery-datatable.js"></script>

    <!-- Custom Js -->
    <script src="../js/pages/forms/editors.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>

    <script>
        $('#tambahGejala').click( function(e) {
            var number = $(this).attr('data-number');
            var numerBaru = parseInt(number) +1;
            $('.tambah'+number).append('<label>Gejala '+numerBaru+'</label>'+
                '<div class="form-group">' +
                '<select name="id_gejala[]" class="form-control" style="width: 100%;">'+
                '<?php foreach ($sql_gejala as $kat): ?>' +
                '<option value="<?php echo $kat['id_gejala'] ?>"><?php echo $kat['nama_gejala'] ?></option>'+
                '<?php endforeach;?>'+
                '</select>'+
                '</div>'+
                '<div class="tambah'+numerBaru+'"></div>');
            $(this).attr('data-number',numerBaru);

        })
    </script>
</body>

</html>
