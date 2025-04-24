<?php require RUTA_APP . "/views/layout/admin/admin_header_calls.php";?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php require RUTA_APP . "/views/layout/admin/admin_sidebar_header.php";?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <?php require RUTA_APP . "/views/layout/admin/admin_tarjetas.php";?>

            <!-- Main row -->
            <div class="row justify-content-center">
                <!-- Left col -->
                <section class="col-lg-4">
                    <h3>Crear Cuenta</h3>
                    <div class="card shadow mt-3 bg-dark p-3">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Cuenta Principal</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Nombre de la cuenta">
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-lg btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Tipo de Cuenta
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-lg btn-primary">Guardar</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>






                </section>
                <!-- /.Left col -->

                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
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