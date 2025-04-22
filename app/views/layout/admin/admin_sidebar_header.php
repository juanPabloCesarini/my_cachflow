
<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>CS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>My Cashflow</b>System</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo RUTA_URL;?>/img/<?php echo $_SESSION['avatar'];?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nombre'];?></p>
          
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>PERFIL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="index.html"><i class="fa fa-circle-o"></i>Editar Cuenta</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Cerrar Sesión</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-usd"></i> <span>CUENTAS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="index.html"><i class="fa fa-circle-o"></i>Principal</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Secundaria</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Movimientos</span>
         
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-plus"></i>Nuevo Movimiento</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-list"></i>Listado Año Actual</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-list"></i>Listado entre fechas</a></li>
            
          </ul>
        </li>
    
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Gráficos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i>Ingresos</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i>Egresos</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i>Relación I/E</a></li>
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>