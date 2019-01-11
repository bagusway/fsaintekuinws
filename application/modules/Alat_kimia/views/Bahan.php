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

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<script type="text/javascript" class="init">
    $(document).on( "click", '#tomboledit',function(e) {
        var id_bahan_kimia = $(this).data('id_bahan_kimia');
        var kode_bahan = $(this).data('kode_bahan');
        var nama_bahan = $(this).data('nama_bahan');
        var bm = $(this).data('bm');
        var persen = $(this).data('persen');
        var bj = $(this).data('bj');
        var jumlah_stok_bahan = $(this).data('jumlah_stok_bahan');
        var jenis_bahan = $(this).data('jenis_bahan');

        
        $("#id_bahan_kimia2").val(id_bahan_kimia);
        $("#kode_bahan2").val(kode_bahan);
        $("#nama_bahan2").val(nama_bahan);
        $("#bj2").val(bj);
        $("#bm2").val(bm);
        $("#persen2").val(persen);
        $("#jenis_bahan2").val(jenis_bahan);
        $("#jumlah_stok_bahan2").val(jumlah_stok_bahan);
        });

    $(document).on("click",'#tombolpakai',function(){
        var id_bahan_kimia = $(this).data('id_bahan_kimia');
        var kode_bahan = $(this).data('kode_bahan');
        var nama_bahan = $(this).data('nama_bahan');
        var bm = $(this).data('bm');
        var persen = $(this).data('persen');
        var bj = $(this).data('bj');
        var jumlah_stok_bahan = $(this).data('jumlah_stok_bahan');
        var jenis_bahan = $(this).data('jenis_bahan');
        var tanggal_pakai =$(this).data('tanggal_pakai');
        var id_dosen =$(this).data('id_dosen');
        var harga_bahan=$(this).data('harga_bahan');
        var id_praktikum =$(this).data('id_praktikum');
        var satuan =$(this).data('satuan');

        
        $("#kode_bahan3").val(kode_bahan);
        $("#id_bahan_kimia10").val(id_bahan_kimia);
        $("#nama_bahan3").val(nama_bahan);
        $("#bj3").val(bj);
        $("#bm3").val(bm);
        $("#datepicker2").val(tanggal_pakai);
        $("#persen3").val(persen);
        $("#jenis_bahan3").val(jenis_bahan);
        $("#jumlah_stok_bahan3").val(jumlah_stok_bahan);
        $("#id_praktikum3").val(id_praktikum);
        $("#id_dosen3").val(id_dosen);
        $("#satuan3").val(satuan);
        $("#harga_bahan").val(harga_bahan);

    });
    
    $(document).on( "click", '#tombolhapus',function(e) {
        var id_bahan_kimia = $(this).data('id_bahan_kimia');
        $("#id_bahan_kimia3").val(id_bahan_kimia);
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
        <li class="treeview active">
          <a href="#"><i class="fa fa-archive"></i> <span>Bahan</span>
          </a>
          <ul  class="treeview-menu">
            <li class="active">
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
        Data Bahan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Bahan</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Bahan</h3>
              <!-- modal -->
              <div class="pull-right" style="border-bottom: 12px">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  Tambah bahan
                </button>
              </div>
              <!-- modal hapus -->
              <div class="modal fade" id="modalhapus" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                Hapus Data
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <form method="post" action="<?php echo base_url('Alat_kimia/HapusBahan');?>">
                <input type="hidden" name="id_bahan_kimia" id="id_bahan_kimia3">
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
<!-- modal edit bahan -->
<div class="modal fade" id="modaledit">
   <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Edit Bahan</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form"  method="post" action ="<?php echo base_url('Alat_kimia/ubahBahan')  ;?>">
                        <div class="box-body">
                          <input type="hidden" id="id_bahan_kimia2" name="id_bahan_kimia">

                          <div class="form-group">
                            <label for="kode_bahan">Kode bahan</label>
                            <input type="text" class="form-control" id="kode_bahan2" name="kode_bahan" placeholder="Kode Bahan">
                          </div>
                          <div class="form-group">
                            <label for="nama_bahan">Nama Bahan</label>
                            <input type="text" class="form-control" id="nama_bahan2" name="nama_bahan" placeholder="Nama Bahan">
                          </div>
                          <div class="form-group">
                            <label for="bm">Berat Molekul</label>
                            <input type="text" class="form-control" id="bm2" name="bm" placeholder="Berat Molekul" required="true">
                          </div>
                          <div class="form-group">
                            <label for="bj">Berat Jenis</label>
                            <input type="text" class="form-control" id="bj2" name="bj" placeholder="Berat Jenis" required="true">
                          </div>
                          <div class="form-group">
                            <label for="persen">Kepekatan %</label>
                            <input type="text" class="form-control" id="persen2" name="persen" placeholder="Kepekatan" required="true">
                          </div>
                          <div class="form-group">
                            <label for="jumlah_stok_bahan"> Stok Bahan</label>
                            <input type="text" class="'form-control" id="jumlah_stok_bahan2" name="jumlah_stok_bahan" placeholder="Stok Bahan (gram)" required="true">
                          </div>
                          <div class="form-group">
                            <label for="jenis_bahan">Jenis Bahan</label>
                            <select id="jenis_bahan2" name="id_jenis_bahan" required="true"> 
                              <option value=""> Please Select One</option>
                            <?php
                                  foreach ($jenisbahan as $key ) {
                                    echo "<option value='".$key->id_jenis_bahan."'>".$key->jenis_bahan."</option>";
                                  }
                            ?></select>
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


<!-- modal pakai -->
<div class="modal fade" id="modalpakai">
   <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Pakai Bahan</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form"  method="post" action ="<?php echo base_url('Alat_kimia/Pakaibahan')  ;?>">
                        <div class="box-body">
                          
                          <input type="hidden" class="form-control" id="id_bahan_kimia10" name="id_bahan_kimia">

                          <div class="form-group">
                            <label for="kode_bahan">Kode bahan</label>
                            <input type="text" class="form-control" id="kode_bahan3" name="kode_bahan" placeholder="Kode Bahan" readonly="true">
                          </div>
                          <div class="form-group">
                            <label for="nama_bahan">Nama Bahan</label>
                            <input type="text" class="form-control" id="nama_bahan3" name="nama_bahan" placeholder="Nama Bahan" readonly="true">
                          </div>
                          <div class="form-group">
                            <label for="bm">Berat Molekul</label>
                            <input type="text" class="form-control" id="bm3" name="bm" placeholder="Berat Molekul" readonly="true">
                          </div>
                          <div class="form-group">
                            <label for="bj">Berat Jenis</label>
                            <input type="text" class="form-control" id="bj3" name="bj" placeholder="Berat Jenis" readonly="true">
                          </div>
                          <div class="form-group">
                            <label for="persen">Kepekatan %</label>
                            <input type="text" class="form-control" id="persen3" name="persen" placeholder="Kepekatan" readonly="true">
                          </div>
                          <div class="form-group">
                            <label for="jumlah_stok_bahan"> Stok Bahan</label>
                            <input type="text" class="'form-control" id="jumlah_stok_bahan3" name="jumlah_stok_bahan" placeholder="Stok Bahan (gram)" readonly="true">
                            <input type="text" name="satuan" id="satuan3" readonly="true">
                          </div>
                          <div class="form-group">
                            <label for="jenis_bahan">Jenis Bahan</label>
                            <input type="text" id="jenis_bahan3" name="jenis_bahan" readonly="true">
                          </div>
                          <div class="form-group">
                            <label for="tanggal_pakai">Tanggal</label>
                            <div class="input-group">
                             <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" id="datepicker2" name="tanggal_pakai" placeholder="Masukkan tanggal pemakaian bahan " required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="jumlah_pakai"> Jumlah Pakai Bahan</label>
                            <input type="text" class="'form-control" id="jumlah_pakai" name="jumlah_pakai" placeholder="Masukkan Jumlah Bahan yang akan di pakai" required="true">
                            <label for="satuan" style="padding-left: 10px">Satuan</label>
                            <select name="satuan" id="satuan">
                              <option value="mL">mL</option>
                              <option value="gram">gram</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="harga" style="padding-right: 47px" >Harga Bahan</label>
                            <input type="text"  name="harga_bahan" id="harga_bahan" placeholder="Masukkan harga bahan">
                            <label for="satuan" style="padding-left: 10px">Satuan</label>
                            <select name="satuan2" id="satuan">
                              <option value="mL">mL</option>
                              <option value="gram">gram</option>
                            </select>
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
                      <input type="submit" name="submit" value="save" class="btn btn-primary"/>
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-primary" value="submit" >Save changes</button> -->
                    </div>
                  </form>
                </div>
                </div>
              
            </div>

<!-- modal hapus -->
 

<!-- modal hapus -->
</div>

              <!-- modal tambah bahan -->
              <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Tambah Bahan</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form" method="post" action="<?php echo $addBahankimia; ?>">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="kode_bahan">Kode Bahan</label>
                            <input type="text" class="form-control" id="kode_bahan" name="kode_bahan" placeholder="Masukkan Kode Bahan kimia yang akan ditambahkan" required="true">
                          </div>
                          <div class="form-group">
                            <label for="nama_bahan">Nama Bahan</label>
                            <input type="text" class="form-control" id="nama_bahan" name="nama_bahan" placeholder="Tuliskan Nama Bahan kimia yang akan ditambahkan" required="true">
                          </div>
                          <div class="form-group">
                            <label for="rumus_kimia">Rumus Kimia</label>
                            <input type="text" class="form-control" id="rumus_kimia" name="rumus_kimia" placeholder="Tuliskan Rumus Kimia dari bahan kimia yang akan ditambahkan " required="true">
                          </div>
                          <div class="form-group">
                            <label for="bm">Berat Molekul (g/mol)</label>
                            <input type="text" class="form-control" id="bm" name="bm" placeholder="Masukkan berat molekul dari senyawa bahan kimia yang akan ditambahkan" required="true">
                          </div>
                          <div class="form-group">
                            <label for="bj">Berat Jenis (N/m3)</label>
                            <input type="text" class="form-control" id="bj" name="bj" placeholder="Masukkan berat jenis dari senyawa bahan kimia yang akan ditambahkan" required="true">
                          </div>
                          <div class="form-group">
                            <label for="persen">Kepekatan (%)</label>
                            <input type="text" class="form-control" id="persen" name="persen" placeholder="Masukkan persentase kepekatan dari senyawa bahan kimia yang akan ditambahkan" required="true">
                          </div>
                           <div class="form-group">
                            <label for="persen">Harga Bahan</label>
                            <input style="width: 50%" type="text" class="form-control" id="harga_bahan" name="harga_bahan" placeholder="Masukkan harga bahan" required="true">
                          </div>
                          <div class="form-group">
                            <label for="jumlah_stok_bahan"> Stok Bahan</label>
                            <input type="text" class="'form-control" id="jumlah_stok_bahan" name="jumlah_stok_bahan" placeholder="Masukkan jumlah bahan yang akan ditambahkan" required="true">
                         
                            
                            <label style="padding-left: 10px" for="satuan"> Satuan</label>
                            <select id="satuan" name="satuan">
                              <option value="">gram / mL</option>
                              <option value="mL">mL</option>
                              <option value="gram">gram</option>
                            </select>
                          </div>


                          <div class="form-group">
                            <label for="jenis_bahan">Jenis Bahan</label>
                            <select id="jenis_bahan" name="id_jenis_bahan"> 
                              <option value=""> Please Select One</option>
                            <?php
                                  foreach ($jenisbahan as $key ) {
                                    echo "<option value='".$key->id_jenis_bahan."'>".$key->jenis_bahan."</option>";
                                  }
                            ?></select>
                          </div>

                        </div>
                      
                    
                    <div class="modal-footer">
                      <input type="submit" name="submit" value="save" class="btn btn-primary"/>
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  </form>
                </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Bahan</th>
                  <th>Nama Bahan</th>
                  <th>Rumus Kimia</th>
                  <th>Jumlah Stok</th>
                  <th>Berat Jenis </th>
                  <th> Berat Molekul</th>
                  <th>Kepekatan(%)</th>
                  <th>Jenis Bahan</th>
                  <th>Harga Bahan (gr/mL)</th>
                  <th>Pemakaian</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($bahan as $bahanx) {
                  echo "
                
                <tr>

                  <td>".$bahanx->kode_bahan."</td>
                  <td>".$bahanx->nama_bahan."</td>
                  <td>".$bahanx->rumus_kimia."</td>
                  <td>".$bahanx->jumlah_stok_bahan."  ".$bahanx->satuan."</td>
                  <td align='center'>".$bahanx->bj."</td>
                  <td>".$bahanx->bm."</td>
                  <td>".$bahanx->persen."</td>
                  <td>".$bahanx->jenis_bahan."</td>
                  <td>".$bahanx->harga_bahan."</td>
                  <td> <button type='button' id='tombolpakai' data-toggle='modal' data-target='#modalpakai'
                 data-id_bahan_kimia='".$bahanx->id_bahan_kimia."' 
                  data-nama_bahan='".$bahanx->nama_bahan."'
                      data-kode_bahan='".$bahanx->kode_bahan."'
                      data-rumus_kimia='".$bahanx->rumus_kimia."'
                      data-bm='".$bahanx->bm."'
                      data-bj='".$bahanx->bj."'
                      data-persen='".$bahanx->persen."'
                      data-status='".$bahanx->satuan."'
                      data-jumlah_stok_bahan='".$bahanx->jumlah_stok_bahan."'
                      data-jenis_bahan='".$bahanx->jenis_bahan."' class='btn btn-success btn-xs'>Pakai</button>
                      </td>
                  <td>
                      <button type='button' id='tomboledit' data-toggle='modal' data-target='#modaledit'
                      data-id_bahan_kimia='".$bahanx->id_bahan_kimia."'
                      data-nama_bahan='".$bahanx->nama_bahan."'
                      data-kode_bahan='".$bahanx->kode_bahan."'
                      data-rumus_kimia='".$bahanx->rumus_kimia."'
                      data-bm='".$bahanx->bm."'
                      data-bj='".$bahanx->bj."'
                      data-persen='".$bahanx->persen."'
                      data-jumlah_stok_bahan='".$bahanx->jumlah_stok_bahan."'
                      data-jenis_bahan='".$bahanx->jenis_bahan."' class='btn btn-info btn-xs'>Edit</button>
                      <button type='button' id='tombolhapus' data-toggle='modal' data-target='#modalhapus' data-id_bahan_kimia='".$bahanx->id_bahan_kimia."'  class='btn btn-danger btn-xs'>Delete</button>
                      
                  </td>
                </tr>" ;}?>
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
<!-- datepicker -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
  $(function () {
     $('#datepicker2').datepicker({
      format:"dd-mm-yyyy",
      autoclose: true
    })
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
