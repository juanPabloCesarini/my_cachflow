<?php require RUTA_APP .'/views/layout/landing/header.php';?>
<header>
    <nav class="navbar bg-body-auth">
        <div class="container-fluid justify-content-end">
            <a class="btn btn-outline-dark me-2" type="button" href="<?php echo RUTA_URL; ?>/AuthController/login">Ingresar</a>

        </div>
    </nav>
</header>
<section class="container mt-3 mb-3">
    <h2 class="text-center text-dark">Bienvenido a tu control monetario y financiero</h2>
    <div class="row">
        <div class="col-md-3">
            <p class="text-dark text-center">Nuestro sistema te ayudará a controlar tus gastos.</p>
            
        </div>
        <div class="col-md-9">
            <img class="" src="<?php echo RUTA_URL;?>/img/cashflow.jpeg" alt="">
        </div>
    </div>

</section>

<?php require RUTA_APP .'/views/layout/landing/footer.php';?>