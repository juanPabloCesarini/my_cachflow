<?php require RUTA_APP . "/views/layout/admin/admin_header_calls.php";?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php require RUTA_APP . "/views/layout/admin/admin_sidebar_header.php";?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <?php require RUTA_APP . "/views/layout/admin/admin_tarjetas.php";?>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->


  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; <?php echo date('d/m/Y');?> Juan Pablo Cesarini</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->



<?php require RUTA_APP . "/views/layout/admin/admin_footer_calls.php";?>
</body>
</html>