<?php require RUTA_APP . "/views/layout/auth/header_calls.php";?>

<body class="hold-transition register-page bg-body-auth">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>MyCashflow</b>SYSTEM</a>
  </div>

  <div class="register-box-body">
    

    <form action="<?php echo RUTA_URL;?>/AuthController/registrarUsuario" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="apellido" type="text" class="form-control" placeholder="Apellido">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="avatar" type="file" class="form-control" placeholder="Ingresa tu imagen de perfil">
        <span class="fa fa-picture-o form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="email" type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input name="pass" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="pass2" type="password" class="form-control" placeholder="Repetir password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <?php print_r($data['error_cuenta']);?>
      <?php 
          if ($data['error_tipo']!=''){
              echo $data['error_tipo'];
          }
      ?>
      <?php 
          if ($data['error_megas']!=''){
              echo $data['error_megas'];
          }
      ?>
      <?php 
          if ($data['error_cuenta']!=''){
              echo $data['error_cuenta'];
          }
      ?>
        <div class="col-xs-6">
          <button type="submit" class="btn btn-auth btn-block btn-flat">Registrarme</button>
        </div>
        <div class="col-xs-6">
        <a href="<?php echo RUTA_URL;?>/AuthController/login" class="btn btn-auth btn-block btn-flat">Ya tengo cuenta</a>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div> -->

    
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->


<?php require RUTA_APP . "/views/layout/auth/footer_calls.php";?>