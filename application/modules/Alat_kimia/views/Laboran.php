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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
<script type="text/javascript" class="init">
   $(document).on( "click", '#tomboledit',function(e) {
        var id_laboran = $(this).data('id_laboran');
       var nip = $(this).data('nip');
        var nama_laboran = $(this).data('nama_laboran');
        var email = $(this).data('email');
        var no_telp = $(this).data('no_telp');
        // var jumlah_stok_alat = $(this).data('jumlah_stok_alat');
        
        $("#id_laboran2").val(id_laboran);
        $("#nip2").val(nip);
        $("#nama_laboran2").val(nama_laboran);
        $("#email2").val(email);
        $("#no_telp2").val(no_telp);
        });

  $(document).on( "click", '#tombolhapus',function(e) {
        var id_laboran = $(this).data('id_laboran');

        $("#id_laboran9").val(id_laboran);
    });
</script>


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
        <li class="active"><a href="<?php echo base_url('Alat_kimia/laboran'); ?>"><i class="fa fa-users"></i> <span>Laboran</span></a></li>
        <li class="treeview">
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
        Data Laboran
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Laboran</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Laboran</h3>
              <!-- modal -->
              <div class="pull-right">
                <a href="<?php echo base_url('Login/NewRegister'); ?>"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">
                  Tambah Laboran
                </button> </a>
              </div>
              
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIP</th>
                  <th>Nama Laboran</th>
                  <th>Email</th>
                  <th>No Kontak</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($laboran as $laboranx) {
                  echo "                
                <tr>
                  <td>".$laboranx->nip."</td>
                  <td>".$laboranx->nama_laboran."</td>
                  <td>".$laboranx->email."</td>
                  <td>".$laboranx->no_telp."</td>
                  <td>
                      <button type='button' class='btn btn-info btn-xs' id='tomboledit' data-toggle='modal'
                      data-id_laboran='".$laboranx->id_laboran."' 
                      data-nama_laboran='".$laboranx->nama_laboran."'
                      data-nip='".$laboranx->nip."'
                      data-email='".$laboranx->email."'
                      data-no_telp='".$laboranx->no_telp."' data-target='#modaledit'>Edit</button>
                      <button type='button' id='tombolhapus' data-toggle='modal' data-id_laboran='".$laboranx->id_laboran."' data-target='#modalhapus' class='btn btn-warning btn-xs'>Delete</button>
                  </td>
                </tr>"
                ;}?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama Laboran</th>
                  <th>NIP</th>
                  <th>Email</th>
                  <th>No Kontak</th>
                  <th>Action</th>
                </tr>
                </tfoot>
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
<!-- modal hapus -->
<div class="modal fade" id="modalhapus" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                Hapus Data
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <form method="post" action="<?php echo base_url('Alat_kimia/Hapuslaboran');?>">
                <input type="hidden" name="id_laboran" id="id_laboran9">
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

<!-- modal edit -->
 <div class="modal fade" id="modaledit">
   <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Edit Laboran</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form"  method="post" action ="<?php echo base_url('Alat_kimia/Ubahlaboran')  ;?>">
                        <div class="box-body">
                         <div>
                           <input type="hidden" id="id_laboran2" name="id_laboran"> 
                         </div> 
                           <div class="form-group">
                            <label for="nama_laboran">Nama Laboran</label>
                            <input type="text" class="form-control" id="nama_laboran2" name="nama_laboran" placeholder="Nama Laboran">
                          </div>
                          <div class="form-group">
                            <label for="NIP">NIP</label>
                            <input type="text" class="form-control" id="nip2" name="nip" placeholder="NIP">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email2" name="email" placeholder="email">
                          </div>

                          <div class="form-group">
                            <label for="no_telp">No Kontak</label>
                            <input type="text" class="form-control" id="no_telp2" name="no_telp" placeholder="No Kontak">
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
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
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
