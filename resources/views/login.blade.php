
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISFO AKADEMIK | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" style="background-color: #808080; background-image: url('/assets/dist/img/login.jpg'); background-repeat: no-repeat;">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
  <div style="background-color:#white; padding-bottom:20px;font-family:Agency FB; font-weight:bold; color:#24406d; font-size:22px; text-align:center">
			<!-- <img src="/assets/dist/img/Tulisan.png" width="85%" style="padding-bottom:10px; padding-top:10px "> <br> -->
			<h4 class="text-center">
        <b style="color: darkblue">SISTEM INFORMASI AKADEMIK</b><br/>
        <b style="color: darkblue">SMA NEGERI 6 SOLOK SELATAN</b>
    </h4>
        <h4 class="text-center"><i><b>Login System</b></i></h4>
		</div>

    <form action="/assets/index2.html" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username / NIP / NIS">
        <span class="glyphicon glyphicon-user bg-blue-active form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock bg-blue-active form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn bg-blue-active btn-block" style="color: #FFFFFF"><b>SIGN IN</b> &nbsp; <i class="glyphicon glyphicon-log-in"></i></button><BR>

          <marquee><font color=darkblue size=2><strong>[INFORMASI ] SELAMAT DATANG DI SISTEM INFORMASI AKADEMIK SMA NEGERI 6 SOLOK SELATAN &copy;2020
</strong></font></marquee>

        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/assets/plugins/iCheck/icheck.min.js"></script>
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
