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
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css">
  <script src="<?php echo base_url();?>assets/modal/jquery-1.11.0.min.js"></script>
  <!-- <script src="<?php echo base_url(); ?>bower_components/ajax/jquery.min.js"></script> -->



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript" class="init">
    $(document).on( "click", '#tombolganti',function(e) {
        var id_alat_kimia = $(this).data('id_alat_kimia');
        var kode_alat = $(this).data('kode_alat');
        var nama_alat = $(this).data('nama_alat');
        var jumlah_alat = $(this).data('jumlah_alat');
        var jumlah_rusak = $(this).data('jumlah_rusak');
        var nama_dosen = $(this).data('nama_dosen');
        var nama_praktikum = $(this).data('nama_praktikum');
        var id_status = $(this).data('id_status');
      
        
        $("#id_alat_kimia4").val(id_alat_kimia);
        $("#jumlah_alat4").val(jumlah_alat);
        $("#kode_alat4").val(kode_alat);
        $("#nama_alat4").val(nama_alat);
        $("#id_status4").val(id_status);
        $("#jumlah_rusak4").val(jumlah_rusak);
        $("#nama_dosen4").val(nama_dosen);
        $("#nama_praktikum4").val(nama_praktikum);
        $("#tanggal_ganti4").val(tanggal_ganti);
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
            <li><a href="<?php echo base_url('Alat_kimia/Alat'); ?>"><i class="fa fa-circle-o"></i> Daftar Alat</a></li>
            <li class="active"><a href="<?php echo base_url('Alat_kimia/kerusakanAlat'); ?>"><i class="fa fa-circle-o"></i> Kerusakan</a></li>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kerusakan Alat
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Alat</a></li>
        <li class="active">Kerusakan alat</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kerusakan Alat</h3>
              <!-- modal -->
              <div class="pull-right"> <a href="<?php echo base_url('Alat_kimia/Alat'); ?>">
                <button type="button" class="btn btn-primary" >
                  Tambah alat rusak
                </button> </a>

              </div>
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
               <!--  <ul class="nav nav-tabs">
                  <li class="active"><a href="#revenue-chart" data-toggle="tab">Alat Rusak</a></li>
                  <li><a href="#sales-chart" data-toggle="tab">Alat Sudah Diganti</a></li>
                </ul> -->
                <div class="tab-content no-padding">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart">
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>

                  <th>NIP Laboran</th>
                  <th>Kode Alat</th>
                  <th>Nama Alat</th>
                  <th>Sinonim</th>
                  <th>Ukuran</th>
                  <th>Jenis Bahan</th>
                  <th>Dosen / Praktikum</th>
                  <th>Jumlah Rusak</th>
                  <th>Deskripsi</th>
                  <th> Ganti Alat</th>
                  
                </tr>
                </thead>
                <tbody>
                
                  <?php 
                    foreach ($hasil2 as $hasilx) {

                    echo "<tr>
                    <td>".$hasilx->nip."</td>
                    <td>".$hasilx->kode_alat."</td>
                    <td>".$hasilx->nama_alat."</td>
                    <td>".$hasilx->sinonim."</td>
                    <td>".$hasilx->ukuran."</td>
                    <td>".$hasilx->jenis_bahan."</td>
                    <td>".$hasilx->nama_dosen." / ".$hasilx->nama_praktikum."</td>
                    <td>".$hasilx->jumlah_rusak."</td>
                    <td>".$hasilx->deskripsi."</td>
                    <td><button type='button' id='tombolganti' data-toggle='modal' data-target='#modalganti'
                          data-id_alat_kimia  ='".$hasilx->id_alat_kimia."'
                          data-kode_alat='".$hasilx->kode_alat."'
                          data-jumlah_alat='".$hasilx->jumlah_alat."'
                          data-nama_alat='".$hasilx->nama_alat."'
                          data-jumlah_rusak='".$hasilx->jumlah_rusak."'
                          data-id_status='".$hasilx->id_status."'
                          data-nama_dosen='".$hasilx->nama_dosen."'
                          data-nama_praktikum='".$hasilx->nama_praktikum."' class='btn btn-warning btn-xs'>Ganti </button> </td>
                    </tr>";}?>
                      
                        </tbody>
                       
                      </table>
                    </div>
                  </div>
                  <div class="chart tab-pane" id="sales-chart">
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <tr>
                          <th>Tanggal</th>
                          <th>Keterangan</th>
                          <th>Nama Alat</th>
                          <th>Satuan</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>Other browsers</td>
                          <td>All others</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Tanggal</th>
                          <th>Keterangan</th>
                          <th>Nama Alat</th>
                          <th>Satuan</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              
    
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- modal ganti alat -->

  <div class="modal fade" id="modalganti">
   <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Ganti Alat Rusak</h4>
                    </div>
                     <div class="modal-body">
                     <form role="form"  method="post" action ="<?php echo base_url('Alat_kimia/ganti')  ;?>">
                        <div class="box-body">
                         <input type="hidden" id="id_alat_kimia4" name="id_alat_kimia">
                         <input type="hidden" id="jumlah_alat4" name="jumlah_alat">
                         

                         <div class="form-group">
                            <label for="kode_alat">Kode Alat</label>
                            <input type="text" class="form-control" id="kode_alat4" name="kode_alat" placeholder="Kode ALat" readonly="true">
          
                          </div>
                          <div class="form-group">
                            <label for="nama_alat">Nama Alat</label>
                            <input type="text" class="form-control" id="nama_alat4" name="nama_alat" placeholder="Nama" readonly="true">
                          </div>
                          <div class="form-group">
                            <label for="jumlah_stok_alat">Jumlah Rusak</label>
                            <input type="text" class="form-control" id="jumlah_rusak4" name="jumlah_rusak" readonly="true">
                          </div>
                           <div class="form-group">
                            <label for="nama_dosen">Dosen</label>
                            <input type="text" class="form-control" id="nama_dosen4" name="nama_dosen" readonly="true">
                          </div>
                          <div class="form-group">
                            <label for="nama_dosen">Praktikum</label>
                            <input type="text" class="form-control" id="nama_praktikum4" name="nama_praktikum" readonly="true">
                          </div>

                          <div class="form-group">
                            <label for="tanggal_rusak">Tanggal Ganti Alat</label>
                            <div class="input-group">
                             <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" id="datepicker2" name="tanggal_rusak" placeholder="Masukkan tanggal pengembalian alat">
                            </div>
                          </div>
                           <div class="form-group">
                            <label for="jumlah_ganti_alat">Jumlah Ganti Alat</label>
                            <input type="text" class="form-control" id="jumlah_ganti4" name="jumlah_ganti" placeholder="Jumlah Ganti Alat">
                          </div>

                        </div>
                        <div class="modal-footer">
                          <input type="submit" name="submit" value="Ganti" class="btn btn-primary"/>
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </form>
                    
                    </div>
                  </div>
                </div>
  </div>


  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
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
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script>
  $('#datepicker2').datepicker({
      autoclose: true
    })
  $(function () {
    $('#example1').DataTable()
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
