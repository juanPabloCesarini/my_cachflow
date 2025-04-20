<?php require RUTA_APP . "/views/layout/auth/header_calls.php";?>
<body class="hold-transition login-page bg-body-auth">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>MyCashflow</b>SYSTEM</a>
  </div>
  <!-- /.login-logo -->
   
  <div class="login-box-body">
    

    <form action="<?php echo RUTA_URL;?>/AuthController/loginUsuario/" method="post">
      <div class="form-group has-feedback">
        <input name="email" type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="pass" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
            <button type="submit" class="btn btn-auth btn-block btn-flat">Ingresar</button>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xs-6">
        <a class="btn btn-auth btn-block btn-flat" href="<?php echo RUTA_URL;?>/AuthController/register">Soy Nuevo</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
        <a class="btn btn-auth btn-block btn-flat" href="<?php echo RUTA_URL;?>/AuthController/resetpass">Olvidé mi contraseña</a>
        </div>
        <!-- /.col -->
      </div>
    </form>

   

    
    

  </div>
  <!-- /.login-box-body -->
</div>
    
    <?php require RUTA_APP . "/views/layout/auth/footer_calls.php";?>