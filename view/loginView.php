<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SGI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="public/vendor/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/vendor/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="public/vendor/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/vendor/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="public/vendor/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a  href="#"><img height="200" src="public/img/sgi.jpeg"/></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Connexion</p>

      <form action="" method="post">
        <div class="form-group has-feedback">
          <input type="tel" name="phone_number" id="phone_number" class="form-control" placeholder="N° de téléphone">
          <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="password_" name="password_" class="form-control" placeholder="Mot de passe">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Se connecter</button>
          </div>

          <!-- /.col -->
        </div>
      </form>
      <?php
      if (isset($_SESSION['messages'])) {
        echo Manager::messages($_SESSION['messages'], 'alert-danger');
      }
      ?>
      <a href="#">Modifier le mot de passe</a><br>
      <a href="index.php?signup" class="text-center">Activer son compte</a>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="public/vendor/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="public/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="public/vendor/plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
</body>

</html>