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
    $(document).on( "click", '#tombolkembali',function(e) {
        var id_alat_kimia = $(this).data('id_alat_kimia');
        var kode_alat = $(this).data('kode_alat');
        var nama_alat = $(this).data('nama_alat');
        var jumlah_alat = $(this).data('jumlah_alat');
        var jumlah_pinjam = $(this).data('jumlah_pinjam');
        var nama_dosen = $(this).data('nama_dosen');
        var nama_praktikum = $(this).data('nama_praktikum');
        var id_status = $(this).data('id_status');
      
        
        $("#id_alat_kimia4").val(id_alat_kimia);
        $("#jumlah_alat4").val(jumlah_alat);
        $("#kode_alat4").val(kode_alat);
        $("#nama_alat4").val(nama_alat);
        $("#id_status4").val(id_status);
        $("#jumlah_pinjam4").val(jumlah_pinjam);
        $("#nama_dosen4").val(nama_dosen);
        $("#nama_praktikum4").val(nama_praktikum);
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
            <li><a href="<?php echo base_url('Alat_kimia/kerusakanAlat'); ?>"><i class="fa fa-circle-o"></i> Kerusakan</a></li>
            <!-- <li><a href="<?php echo base_url('Alat_kimia/kehilanganAlat'); ?>"><i class="fa fa-circle-o"></i> Kehilangan</a></li> -->
            <li class="active"><a href="<?php echo base_url('Alat_kimia/pinjamAlat'); ?>"><i class="fa fa-circle-o"></i> Peminjaman</a></li>
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
        Peminjaman Alat
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Alat</a></li>
        <li class="active">Peminjaman alat</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Peminjaman Alat</h3>
              <!-- modal -->
              <div class="pull-right">
                <a href="<?php echo base_url('Alat_kimia/Alat'); ?>">
                <button type="button" class="btn btn-primary">
                  pinjam alat
                </button></a>
              </div>
              <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Peminjaman Alat</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="nip">NIP Laboran</label>
                            <input type="number" class="form-control" id="nip" placeholder="Enter NIP">
                          </div>
                          <div class="form-group">
                            <label for="KodeA">Kode Alat</label>
                            <input type="text" class="form-control" id="KodeA" placeholder="Enter Kode Alat">
                          </div>
                          <div class="form-group">
                            <label for="Nama">Nama Alat</label>
                            <input type="text" class="form-control" id="Nama" placeholder="Enter Nama Alat">
                          </div>
                          <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="date" class="form-control pull-right" id="datepicker">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIP Laboran</th>
                  <th>Kode</th>
                  <th>Nama Alat</th>
                  <th>Tanggal Pinjam</th>
                  <th>Jumlah</th>
                  <th>Dosen/Praktikum </th>
                  <th>Tarif Sewa</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($pinjaman as $key ) {
                    if($key->jumlah_pinjam >0)
                    echo "<tr>
                    <td>".$key->nip."</td>
                    <td>".$key->kode_alat."</td>
                    <td>".$key->nama_alat."</td>
                    <td>".$key->tanggal_pinjam."</td>
                    <td>".$key->jumlah_pinjam."</td>
                    <td>".$key->nama_dosen." / ".$key->nama_praktikum."</td>
                    <td> Rp. ".$key->tarif_sewa."</td>
                    <td>
                      <button type='button' id='tombolkembali' data-toggle='modal' data-target='#modalkembali' 
                    data-id_alat_kimia  ='".$key->id_alat_kimia."'
                    data-kode_alat      ='".$key->kode_alat."'
                    data-nama_alat      ='".$key->nama_alat."'
                    data-jumlah_pinjam  ='".$key->jumlah_pinjam."'
                    data-nama_praktikum ='".$key->nama_praktikum."'
                    data-nama_dosen     ='".$key->nama_dosen."'
                    data-jumlah_alat    ='".$key->jumlah_alat."'
                    
                     class='btn btn-warning btn-xs'>Kembalikan</button>
                    </td>
                    
                    </tr>";
                  }

                   ?>
                
                </tbody>
                
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
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
<div class="modal fade" id="modalkembali">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Kembali Alat</h4>
                    </div>
                    <div class="modal-body">
                     <form role="form"  method="post" action ="<?php echo base_url('Alat_kimia/kembalikan')  ;?>">
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
                            <label for="jumlah_stok_alat">Jumlah Pinjaman</label>
                            <input type="text" class="form-control" id="jumlah_pinjam4" name="jumlah_pinjam" readonly="true">
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
                            <label for="tanggal_rusak">Tanggal Kembali Alat</label>
                            <div class="input-group">
                             <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" id="datepicker2" name="tanggal_kembali">
                            </div>
                          </div>
                           <div class="form-group">
                            <label for="jumlah_ganti_alat">Jumlah Kembali Alat</label>
                            <input type="text" class="form-control" name="jumlah_kembali" placeholder="Jumlah Ganti Alat">
                          </div>

                        </div>
                        <div class="modal-footer">
                          <input type="submit" name="submit" value="Kembali" class="btn btn-primary"/>
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </form>
                    
                    </div>
              </div>
  
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
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
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
