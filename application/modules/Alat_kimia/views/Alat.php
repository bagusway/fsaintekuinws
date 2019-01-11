<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laboratory Assesment Tool</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- modal -->
  <script src="<?php echo base_url();?>assets/modal/jquery-1.11.0.min.js"></script>

<!-- date picker -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript" class="init">
    $(document).on( "click", '#tomboledit',function(e) {
        var id_alat_kimia = $(this).data('id_alat_kimia');
        var kode_alat = $(this).data('kode_alat');
        var nama_alat = $(this).data('nama_alat');
        var merk = $(this).data('merk');
        var sinonim = $(this).data('sinonim');
        var ukuran = $(this).data('ukuran');
        var jenis_bahan = $(this).data('jenis_bahan');
        var jumlah_alat = $(this).data('jumlah_alat');
        var tarif_sewa = $(this).data('tarif_sewa');
        
        $("#id_alat_kimia2").val(id_alat_kimia);
        $("#kode_alat2").val(kode_alat);
        $("#nama_alat2").val(nama_alat);
        $("#merk2").val(merk);
        $("#sinonim2").val(sinonim);
        $("#ukuran2").val(ukuran);
        $("#jenis_bahan2").val(jenis_bahan);
        $("#jumlah_alat2").val(jumlah_alat);
        $("#tarif_sewa2").val(tarif_sewa);
        });
    $(document).on( "click", '#tombolrusak',function(e) {
        var id_alat_kimia = $(this).data('id_alat_kimia');
        var kode_alat = $(this).data('kode_alat');
        var nama_alat = $(this).data('nama_alat');
        var id_status = $(this).data('id_status');
        var tanggal_rusak = $(this).data('tanggal_rusak');
        var Keterangan=$(this).data('Keterangan');
        var jumlah_alat= $(this).data('jumlah_alat');
        var jumlah_rusak= $(this).data('jumlah_rusak');
        
        $("#id_alat_kimia7").val(id_alat_kimia);
        $("#id_status7").val(id_status);
        $("#kode_alat7").val(kode_alat);
        $("#nama_alat7").val(nama_alat);
        $("#keterangan7").val(Keterangan); 
        $("#jumlah_alat7").val(jumlah_alat);
        $("#jumlah_rusak7").val(jumlah_rusak); 
        $("#datepicker2").val(tanggal_rusak);
        });
    $(document).on("click",'#tombolpinjam',function(e){
      var id_alat_kimia = $(this).data('id_alat_kimia');
        var kode_alat = $(this).data('kode_alat');
        var nama_alat = $(this).data('nama_alat');
        var id_status = $(this).data('id_status');
        var tanggal_pinjam = $(this).data('tanggal_pinjam');
        var Keterangan=$(this).data('Keterangan');
        var jumlah_alat=$(this).data('jumlah_alat');
        var tarif_sewa = $(this).data('tarif_sewa');


        $("#id_alat_kimia8").val(id_alat_kimia);
        $("#id_status8").val(id_status);
        $("#kode_alat8").val(kode_alat);
        $("#nama_alat8").val(nama_alat);
        $("#keterangan8").val(Keterangan); 
        $("#jumlah_alat8").val(jumlah_alat);
        $("#datepicker3").val(tanggal_pinjam);
        $("#tarif_sewa8").val(tarif_sewa);

    });
    $(document).on( "click", '#tombolhapus',function(e) {
        var id_alat_kimia = $(this).data('id_alat_kimia');

        $("#id_alat_kimia3").val(id_alat_kimia);
    });
       $(document).ready(function(){
        $('#ubah').click(function() {
              alert("Tidak ada data yang dipilih"); 

          } );
        $('#hapus').click(function() {
              alert("Tidak ada data yang dipilih"); 

          } );
    });
  </script>



  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS sidebar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('Alat_kimia'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>LAB</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIMALAB</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama_laboran'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('Login/Logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Alat Kimia</li>
        <li><a href="<?php echo base_url('Alat_kimia'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="<?php echo base_url('Alat_kimia/laboran'); ?>"><i class="fa fa-users"></i> <span>Laboran</span></a></li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-gears"></i> <span>Alat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('Alat_kimia/Alat'); ?>"><i class="fa fa-circle-o"></i> Daftar Alat</a></li>
            <li><a href="<?php echo base_url('Alat_kimia/kerusakanAlat'); ?>"><i class="fa fa-circle-o"></i> Kerusakan</a></li>
           <!--  <li><a href="<?php echo base_url('Alat_kimia/kehilanganAlat'); ?>"><i class="fa fa-circle-o"></i> Kehilangan</a></li> -->
            <li><a href="<?php echo base_url('Alat_kimia/pinjamAlat'); ?>"><i class="fa fa-circle-o"></i> Peminjaman</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-archive"></i> <span>Bahan</span>
          </a>
          <ul  class="treeview-menu">
            <li>
              <a href="<?php echo base_url('Alat_kimia/bahan'); ?>"><i class="fa fa-circle-o"></i>Daftar Bahan</a>
            </li>
            <li>
              <a href="<?php echo base_url('Alat_kimia/pemakaianBahan'); ?>"><i class="fa fa-circle-o"></i>Pemakaian</a>
            </li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

<!-- /modal edit -->





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Alat
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Alat</a></li>
        <li class="active">Data alat</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Alat</h3>
              <!-- modal -->
              <div class="pull-right">
                <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  Tambah alat
                </button>
              </div>
              <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Tambah Alat</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form" action ="<?php echo $addAlatKimia ;?>"  method="post">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="kode_alat">Kode Alat</label>
                            <input type="text" class="form-control" id="kode_alat" name="kode_alat" placeholder="Masukkan Kode Alat yang Ditambahkan" required="true">
                          </div>
                          <div class="form-group">
                            <label for="nama_alat">Nama Alat</label>
                            <input type="text" class="form-control" id="nama_alat" name="nama_alat" placeholder="Tuliskan nama alat yang akan ditambahkan" required="true">
                          </div>
                          <div class="form-group">
                            <label for="sinonim">Sinonim</label>
                            <input type="text" class="form-control" id="sinonim" name="sinonim" placeholder="Tuliskan sinonim dari nama alat yang akan ditambahkan" required="true">
                          </div>
                           <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="Masukkan ukuran alat yang akan ditambahkan" required="true">
                          </div>
                          <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" class="form-control" id="merk" name="merk" placeholder="Tuliskan Merk dari alat yang akan ditambahkan" required="true">
                          </div>
                          <div class="form-group">
                            <label for="jenis_bahan">Jenis Bahan</label>
                            <input type="text" class="form-control" id="jenis_bahan" name="jenis_bahan" placeholder="Tuliskan Jenis bahan dari alat yang akan ditambahkan" required="true">
                          </div>
                           <div class="form-group">
                            <label for="tarif_sewa">Tarif Sewa Alat</label>
                            <input type="text" class="form-control" id="tarif_sewa" name="tarif_sewa" placeholder="Masukkan Tarif Sewa Alat" required="true">
                          </div>
                            <div class="form-group">
                            <label for="jumlah_alat">Jumlah Stok Alat</label>
                            <input type="text" class="form-control" id="jumlah_alat" name="jumlah_alat" placeholder="Masukkan Jumlah Alat yang akan ditambahkan" required="true">
                          </div>
                        
                        
                        </div>

                    </div>
                    <div class="modal-footer">
                      <input type="submit" name="submit" value="save" class="btn btn-primary">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-primary" value="submit" >Save changes</button> -->
                    </div>
                  </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
            </div>

          <div class="modal fade" id="modalhapus" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                Hapus Data
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <form method="post" action="<?php echo base_url('Alat_kimia/hapusAlat');?>">
                <input type="hidden" name="id_alat_kimia" id="id_alat_kimia3">
                  <p>Apakah anda yakin?</p>
                </div>
                <div class="modal-footer">
                  <button id="yes" type="submit" class="btn btn-primary">Ya</button>
                  <button id="no" type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>
                </form>
              </div>
            </div>
          </div>

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Alat</th>
                  <th>Nama</th>
                  <th>Merk</th>
                  <th>Sinonim</th>
                  <th>Ukuran</th>
                  <th>Jenis Bahan</th>
                  <th>Jumlah Stok Alat</th>
                  <th>Tarif Sewa</th>
                  <th> Pinjam / Rusak</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                  <?php 
                    foreach ($hasil as $hasilx) {
                      if($hasilx->jumlah_alat > 0){echo "<tr>
                    <td>".$hasilx->kode_alat."</td>
                    <td>".$hasilx->nama_alat."</td>
                    <td>".$hasilx->merk."</td>
                    <td>".$hasilx->sinonim."</td>
                    <td>".$hasilx->ukuran."</td>
                    <td>".$hasilx->jenis_bahan."</td>
                    
                    <td>".$hasilx->jumlah_alat."</td>
                    <td>Rp. ".$hasilx->tarif_sewa."</td>
                    <td><button type='button' id='tombolpinjam' data-toggle='modal' data-target='#modalpinjam'
                          data-id_alat_kimia  ='".$hasilx->id_alat_kimia."'
                          data-kode_alat='".$hasilx->kode_alat."'
                          data-id_status='".$hasilx->id_status."'
                          data-nama_alat='".$hasilx->nama_alat."'
                          data-jumlah_alat='".$hasilx->jumlah_alat."'
                          data-tarif_sewa     ='".$hasilx->tarif_sewa."'
                         class='btn btn-info btn-xs'>Pinjam </button>
                          
                          <button type='button' id='tombolrusak' data-toggle='modal' data-target='#modalrusak'
                          data-id_alat_kimia  ='".$hasilx->id_alat_kimia."'
                          data-kode_alat='".$hasilx->kode_alat."'
                          data-id_status='".$hasilx->id_status."'
                          data-nama_alat='".$hasilx->nama_alat."'
                          
                          data-jumlah_alat='".$hasilx->jumlah_alat."' class='btn btn-warning btn-xs'>Rusak </button> </td>
                    
                    <td> <button type='button' id='tomboledit' data-toggle='modal' data-target='#modaledit' 
                    data-id_alat_kimia  ='".$hasilx->id_alat_kimia."'
                    data-kode_alat      ='".$hasilx->kode_alat."'
                    data-nama_alat      ='".$hasilx->nama_alat."'
                    data-merk           ='".$hasilx->merk."'
                    data-sinonim        ='".$hasilx->sinonim."'
                    data-ukuran         ='".$hasilx->ukuran."'
                    data-jumlah_alat    ='".$hasilx->jumlah_alat."'
                    data-jenis_bahan    ='".$hasilx->jenis_bahan."'
                    data-tarif_sewa     ='".$hasilx->tarif_sewa."'
                    
                     class='btn btn-info btn-xs'>Edit</button>
                      <button type='button'  id='tombolhapus' data-toggle='modal' data-id_alat_kimia='".$hasilx->id_alat_kimia."' data-target='#modalhapus' class='btn btn-danger btn-xs'>Delete</button>
                  </td>
                    </tr>";}
                    else{
                      echo "<tr>
                    <td>".$hasilx->kode_alat."</td>
                    <td>".$hasilx->nama_alat."</td>
                    <td>".$hasilx->merk."</td>
                    <td>".$hasilx->sinonim."</td>
                    <td>".$hasilx->ukuran."</td>
                    <td>".$hasilx->jenis_bahan."</td>
                    
                    <td>".$hasilx->jumlah_alat."</td>
                    <td></td>
                    
                    <td> <button type='button' id='tomboledit' data-toggle='modal' data-target='#modaledit' 
                    data-id_alat_kimia  ='".$hasilx->id_alat_kimia."'
                    data-kode_alat      ='".$hasilx->kode_alat."'
                    data-nama_alat      ='".$hasilx->nama_alat."'
                    data-merk           ='".$hasilx->merk."'
                    data-sinonim        ='".$hasilx->sinonim."'
                    data-ukuran         ='".$hasilx->ukuran."'
                    data-jumlah_alat    ='".$hasilx->jumlah_alat."'
                    data-jenis_bahan    ='".$hasilx->jenis_bahan."'
                    
                     class='btn btn-info btn-xs'>Edit</button>
                      <button type='button'  id='tombolhapus' data-toggle='modal' data-id_alat_kimia='".$hasilx->id_alat_kimia."' data-target='#modalhapus' class='btn btn-danger btn-xs'>Delete</button>
                  </td>
                    </tr>";
                    }
                    }?>
                      
                
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>Kode Alat</th>
                  <th>Nama</th>
                  <th>Sinonim</th>
                  <th>Satuan Kecil</th>
                  <th>Satuan Besar</th>
                  <th>Stok Alat</th>
                  <th>Action</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<!-- modal edit  -->
 <div class="modal fade" id="modaledit">
   <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Edit Alat</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form"  method="post" action ="<?php echo base_url('Alat_kimia/ubahAlat')  ;?>">
                        <div class="box-body">
                          <input type="hidden" id="id_alat_kimia2" name="id_alat_kimia">

                          <div class="form-group">
                            <label for="kode_alat">Kode Alat</label>
                            <input type="text" class="form-control" id="kode_alat2" name="kode_alat" placeholder="Kode ALat">
                          </div>
                          <div class="form-group">
                            <label for="nama_alat">Nama Alat</label>
                            <input type="text" class="form-control" id="nama_alat2" name="nama_alat" placeholder="Nama">
                          </div>
                          <div class="form-group">
                            <label for="sinonim">Sinonim</label>
                            <input type="text" class="form-control" id="sinonim2" name="sinonim" placeholder="Sinonim">
                          </div>
                          <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" class="form-control" id="merk2" name="merk" placeholder="Merk">
                          </div>
                          <div class="form-group">
                            <label for="jenis_bahan">Jenis Bahan</label>
                            <input type="text" class="form-control" id="jenis_bahan2" name="jenis_bahan" placeholder="Jenis Bahan">
                          </div>
                          <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <input type="text" class="form-control" id="ukuran2" name="ukuran" placeholder="Ukuran">
                          </div>
                          <div class="form-group">
                            <label for="jumlah_alat">Jumlah Alat</label>
                            <input type="text" class="form-control" id="jumlah_alat2" name="jumlah_alat" placeholder="jumlah alat" >
                          </div>
                          <div class="form-group">
                            <label for="tarif_sewa">Tarif Sewa Alat</label>
                            <input type="text" class="form-control" id="tarif_sewa2" name="tarif_sewa" placeholder="Masukkan Tarif Sewa Alat" required="true">
                          </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                      <input type="submit" name="submit" value="save" class="btn btn-primary"/>
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-primary" value="submit" >Save changes</button> -->
                    </div>
                  </form>
                </div>
                </div>
              
            </div>
<!-- modal rusak -->
<div class="modal fade" id="modalrusak">
   <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Rusak</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form"  method="post" action ="<?php echo base_url('Alat_kimia/tambahrusak')  ;?>">
                        <div class="box-body">
                          <input type="hidden" id="id_alat_kimia7" name="id_alat_kimia">
                          <input type="hidden" id="id_status7" name="id_status">
                          <div class="form-group">
                            <label for="kode_alat">Kode Alat</label>
                            <input class="form-control" id="kode_alat7" name="kode_alat" placeholder="Kode Alat" readonly="true">
                          </div>
                          <div class="form-group">
                            <label for="nama_alat">Nama Alat</label>
                            <input type="text" class="form-control" id="nama_alat7" name="nama_alat" placeholder="Nama" readonly="true">
                          </div>
                          <div class="form-group">
                            <label for="tanggal_rusak">Tanggal</label>
                            <div class="input-group">
                             <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" id="datepicker2" name="tanggal_rusak" placeholder="Masukkan tanggal rusaknya alat" required>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="jumlah_alat">Jumlah Alat</label>
                            <input type="text" class="form-control" id="jumlah_alat7" name="jumlah_alat" placeholder="Masukkan Jumlah Alat yang rusak" readonly="true" >
                          </div>
                          <div class="form-group">
                            <label for="deskripsi">Deskripsi Kerusakan Alat</label>
                            <input type="text" class="form-control" id="deskripsi7" name="deskripsi" placeholder="Tuliskan kondisi alat rusak" required >
                          </div>

                          <div class="form-group">
                            <label for="jumlah_rusak">Jumlah Rusak</label>
                            <input type="text" class="form-control" id="jumlah_rusak7" name="jumlah_rusak" placeholder="jumlah alat yang rusak" >
                          </div>
                           <div class="form-group">
                            <label for="dosen">Dosen</label>
                            <div class="input-group">
                            <select name='id_dosen' id='id_dosen'> <?php
                            foreach ($dosen as $dosenx) {
                              echo "<option value='".$dosenx->id_dosen."'>".$dosenx->nama_dosen."</option>";}
                             ?>
                            </select>
                        </div>
                      <div class="form-group">        
                        <label for="praktikum">Praktikum</label>
                        <div class="input-group">
                        <select name="id_praktikum" id="id_praktikum"><?php
                        foreach ($praktikum as $praktikumx) {
                          echo "<option value='".$praktikumx->id_praktikum."'>".$praktikumx->nama_praktikum."</option>";}
                         ?>
                        </select>
                      </div>
                </div>
              </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                      <input type="submit" name="submit" value="save" class="btn btn-primary"/>
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-primary" value="submit" >Save changes</button> -->
                    </div>
                  </form>
                </div>
                </div>
              
            </div>

<!-- modal pinjam -->
<div class="modal fade" id="modalpinjam">
   <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Pinjam</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form"  method="post" action ="<?php echo base_url('Alat_kimia/tambahPinjam')  ;?>">
                        <div class="box-body">
                          <input type="hidden" id="id_alat_kimia8" name="id_alat_kimia">
                          <input type="hidden" id="id_status8" name="id_status">
                          <input type="hidden" id="id_laboran" name="id_laboran">
                          <div class="form-group">
                            <label for="kode_alat">Kode Alat</label>
                            <input class="form-control" id="kode_alat8" name="kode_alat" placeholder="Kode Alat" readonly="true">
                          </div>
                          <div class="form-group">
                            <label for="nama_alat">Nama Alat</label>
                            <input type="text" class="form-control" id="nama_alat8" name="nama_alat" placeholder="Nama" readonly="true">
                          </div>
                          <div class="form-group">
                            <label for="jumlah_alat">Jumlah Alat</label>
                            <input type="text" class="form-control" id="jumlah_alat8" name="jumlah_alat" placeholder="Nama" readonly="true">
                          </div>
                          <div class="form-group">
                            <label for="tanggal_rusak">Tanggal</label>
                            <div class="input-group">
                             <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" id="datepicker3" name="tanggal_pinjam" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="jumlah_pinjam">Jumlah Pinjam</label>
                            <input type="text" class="form-control" id="jumlah_pinjam8" name="jumlah_pinjam" placeholder="Jumlah Pinjam" >
                          </div>
                          <div class="form-group">
                            <label for="sewa">Tarif Sewa Alat</label>
                            <input type="text" class="form-control" name="tarif_sewa" id="tarif_sewa8" placeholder="Masukkan biaya sewa alat">
                          </div>
                        <div class="form-group">
                            <label for="dosen">Dosen</label>
                            <div class="input-group">
                            <select name='id_dosen' id='id_dosen'> <?php
                            foreach ($dosen as $dosenx) {
                              echo "<option value='".$dosenx->id_dosen."'>".$dosenx->nama_dosen."</option>";}
                             ?>
                            </select>
                        </div>
                      <div class="form-group">        
                        <label for="praktikum">Praktikum</label>
                        <div class="input-group">
                        <select name="id_praktikum" id="id_praktikum"><?php
                        foreach ($praktikum as $praktikumx) {
                          echo "<option value='".$praktikumx->id_praktikum."'>".$praktikumx->nama_praktikum."</option>";}
                         ?>
                        </select>
                      </div>
                </div>
              </div>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" name="submit" value="Pinjam" class="btn btn-primary"/>
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-primary" value="submit" >Save changes</button> -->
                    </div>
                  </form>
                </div>
                </div>
              
            </div>


<!-- modal pinjam -->
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script>
 $('#datepicker2').datepicker({
      format:"dd-mm-yyyy",
      autoclose: true
    })
 $('#datepicker3').datepicker({
    format:"dd-mm-yyyy",
      autoclose: true
    })
  $(function () {
    $('#example1').DataTable({
    responsive: true
})
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
