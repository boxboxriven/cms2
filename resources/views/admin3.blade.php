
<?php
use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\UserController;
?> 
@if(Session::has('admin'))
<html>
  
<body>
<style>
  
</style>
<!DOCTYPE html>
<html lang="en">

 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/cms2/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="http://localhost/cms2/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="http://localhost/cms2/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="http://localhost/cms2/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/cms2/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="http://localhost/cms2/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/cms2/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="http://localhost/cms2/plugins/summernote/summernote-bs4.min.css">
<html lang="en" style="height: auto;">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

<link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">

<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="http://localhost/cms2/images/na.gif" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/cms2/public/logoutadmin" class="nav-link">Se déconnecter</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">

      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
      
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
       
        
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button" >
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/cms2/public/admin" class="brand-link">
      <img src="http://localhost/cms2/images/8ok.png" alt="Tunisie GPU" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Bienvenue</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="http://localhost/cms2/images/aok.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrateur</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Panneau de controle
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/cms2/public/admincontact1" class="nav-link active">
                  <i class=""></i>
                  <p>--Consulter Messages--</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/cms2/public/abonnes" class="nav-link">
                  <i class=""></i>
                  <p>--Consulter Abonnés--</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/cms2/public/editapropos" class="nav-link">
                  <i class=""></i>
                  <p>--Modifier la page A propos--</p>
                </a>
              </li>
            </ul>
          </li>
         
        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Produits
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost/cms2/public/ajouter" class="nav-link">
                  <i class=""></i>
                  <p>--Ajouter Produit--</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost/cms2/public/admin3" class="nav-link">
                  <i class=""></i>
                  <p>--Modifier Produit--</p>
                </a>
              </li>
              
              
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Clients
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost/cms2/public/admin2" class="nav-link">
                  <i class=""></i>
                  <p>--Gérer les clients--</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost/cms2/public/ajouterclient" class="nav-link">
                  <i class=""></i>
                  <p>--Ajouter un clients--</p>
                </a>
              </li>
             
            </ul>
            
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class=""></i>
                <p>
                  Commandes
                  <i class="fas fa-angle-left right"></i>
            
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://localhost/cms2/public/admin4" class="nav-link">
                    <i class=""></i>
                    <p>--Consulter commandes--</p>
                  </a>
                </li>
                
              
              
            </li>
            </ul>
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Modifier Produit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Modifier Produit</a></li>
              <li class="breadcrumb-item active">Panneau d'administration</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <body>
<form action="modifierproduit" method="post">
<div class="container">
  <h2>Informations relatives pour vos produits:</h2>        
  <table class="table">
    <head>
      <tr>
        <th>Nom Du Produit</th>
        <th>Prix du produit</th>
        <th>Prix du produit aprés promotion</th>
        <th>Quantité restante</th>
        <th>ID Du Produit</th>
        <th>Pourcentages de promotion</th>
        <th>Suppression </th>
        <th>Modification </th>
      </tr>
    </head>
    <body>
      <tr>
      <?php 
    foreach ($tab as $r){
      $variable1= $r->Nom ;
      $variable2= $r->Prix;
      $variable6= $r->Prix_promo;
      $variable3= $r->Qte;
      $variable4= $r->ID;
      $variable5= $r->Promotion;
      ?>
 <tr>
      <td > <?php echo $variable1  ?></td>
      <td > <?php echo $variable2  ?></td>
      <td > <?php echo $variable6  ?></td>
      <td > <?php echo $variable3  ?></td>
      <td > <?php echo $variable4  ?></td>
      <td > <?php echo $variable5  ?></td>
      <td><a class='btn btn-danger' href= 'http://localhost/cms2/public/suprimerproduit?rn=<?php echo $variable4;?>'>Supprimer</a></td>
      <td><a class='btn btn-info' href= 'http://localhost/cms2/public/modifierproduit?rh=<?php echo $variable4;?>'>Modifier</a></td>
      </tr>
     <?php }
        ?>
    </body>
  </table>
  </form> 

          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="http://localhost/cms2/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://localhost/cms2/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="http://localhost/cms2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="http://localhost/cms2/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/cms2/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="http://localhost/cms2/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="http://localhost/cms2/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/cms2/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost/cms2/plugins/moment/moment.min.js"></script>
<script src="http://localhost/cms2/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="http://localhost/cms2/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="http://localhost/cms2/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="http://localhost/cms2/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/cms2/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/cms2/dist/js/pages/dashboard.js"></script>
</body>
@else
<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
?>
<head>
  <title>SESSION EXPIREE</title>
</head>
  SESSION EXPIREE, VEUILLEZ VOUS CONNECTER A NOUVEAU
<li><a href="/cms2/public/adminlogin">Login</a></li>
@endif

</html>