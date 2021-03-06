<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration Page</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/square/blue.css">
  <!-- <link rel="stylesheet" type="text/css" href="bower_components/show-password/bootstrap-show-password.min.js"> -->
  <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-style/css.css">
 <style>

    .login-box-msg{
      margin: 0;
      text-align: center;
      padding: 0 10px 5px 10px;
    }

    .logo img{
      margin: 0;
      text-align: center;
      padding: 0 10px 20px 10px;
      width: 90px;
      height: 120px;
      position: relative;
      left: 115px;
    }

    .login-box-body{
      border-radius: 15px;
    }
  </style>
</head>
<body class="hold-transition register-page" style="background-image:url('assets/img/bg.jpg'); 
      height: auto;">
<div class="register-box">
  <div class="register-logo">
    <a href="#"></a>
  </div>

  <div class="register-box-body">
    <h3 class="login-box-msg"><b>Laboratory Assesment Tool</b></h3>
    <div class="logo">
      <img src="<?php echo base_url(); ?>assets/img/Logo.png">
    </div>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input name="nama_laboran" id="nama_laboran" type="text" class="form-control" placeholder="Full name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="NIP" id="NIP" type="text" class="form-control" placeholder="NIP">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="email" id="email" type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="no_telp" id="no_telp" type="text" class="form-control" placeholder="No Handphone">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" id="password" type="password" class="form-control" placeholder="Password" data-toggle="password">
      </div>
      <div class="form-group has-feedback">
        <input type="file">
      </div>

      
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
      
        
    </form>

    <div class="social-auth-links text-center">
      <a href="<?php echo base_url('Login')?>" class="text-center">I already have a membership</a>
    </div> 

    
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/show-password/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/show-password/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/show-password/bootstrap-show-password.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
<script type="text/javascript">

$("#password").password('toggle');

</script>
</body>
</html>
