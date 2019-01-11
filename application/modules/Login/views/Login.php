<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laboratory Assesment Tool | Log in</title>
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="bower_components/font-style/css.css">
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
<body class="hold-transition login-page" style="background-image: url('assets/img/bg.jpeg'); height: auto;">
<div class="login-box">
  <div class="login-logo">
    <a href="#"></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h3 class="login-box-msg"><b>Laboratory Assesment Tool</b></h3>
    <div class="logo">
      <img src="<?php echo base_url(); ?>assets/img/Logo.png">
    </div>
     <p><?php if ($this->session->flashdata('errorlogin')<>null) echo $this->session->flashdata('errorlogin'); ?></p>
    <form action="<?php echo base_url('Login/Auth') ;?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" id="nip" name="nip" class="form-control" placeholder="NIP">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <a href="<?php echo base_url('Login/NewRegister');?>" class="text-center">Register a new membership</a>
    </div>
  <!-- /.login-box-body -->
  </div>
<!-- /.login-box -->
</div>
<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
