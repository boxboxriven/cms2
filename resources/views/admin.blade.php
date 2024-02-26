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
  <link rel="stylesheet" href="http://localhost/cms2/css_cal/page.css">
    <link rel="stylesheet" href="http://localhost/cms2/css_cal/style.css">
    <link rel="stylesheet" href="http://localhost/cms2/css_cal/theme.css">
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
          <a class="d-block">Administrateur</a>
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
<<<<<<< HEAD
            <h1 class="m-0">Acceuil</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
=======
            <h1 class="m-0">Accueil </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
>>>>>>> 35af6329cdd16494949b6c73ce5153cbda0f696d
              <li class="breadcrumb-item active">Panneau d'administration</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php 
      $NUM218 = DB::table('products')
      ->select('name')
      ->count();
      ?>
      <?php 
      $NUM219 = DB::table('orders')
      ->select('id')
      ->count();
      ?>
      <?php 
      $NUM222 = DB::table('admins')
      ->select('mdp_admin')
      ->count();
      ?>
       <?php 
      $NUM220 = DB::table('users')
      ->select('id')
      ->count();
      ?>
      <?php 
      $NUM221 = DB::table('orders')
      ->join('products','orders.product_id','=','products.id')
      ->select('Amount','products.price_promo as price')
      ->get();
      $nia1=0;
    foreach($NUM221 as $j){
        $nia1= $j->Amount;
        $nia2= $j->price;
        $nia3= $nia2 * $nia1;
            }
      ?>
         <?php 
      $NUM223 = DB::table('users')
 
      ->select('name')
      ->get();
      $nia1=0;
    foreach($NUM223 as $j){
        $nia12= $j->name;
            }
      ?>
<?php 
      $NUM224 = DB::table('orders')
      ->join('users','orders.user_id','=','users.id')
      ->select('name')
      ->get();
      $nia1=0;
    foreach($NUM224 as $j){
        $nia14= $j->name;
        
            }
      ?>
      <?php 
      $NUM225 = DB::table('orders')
      
      ->select('created_at')
      ->get();
      $nia188=0;
    foreach($NUM225 as $j){
        $nia188= $j->created_at;
        
            }
      ?>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$NUM218}}</h3>

                <p>Total des produits</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/cms2/public/admin3" class="small-box-footer">Plus d'Informations <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$NUM219}}<sup style="font-size: 20px"></sup></h3>

                <p>Total des ordres</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/cms2/public/admin4" class="small-box-footer">Plus d'Informations<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$NUM220}}</h3>

                <p>Utilisateurs enregistrés</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/cms2/public/admin2" class="small-box-footer">Plus d'Informations<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3> {{$nia3}}  Dinars </h3>

                <p>Dernier gain en dinars</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a  class="small-box-footer">Actualisation Temps réel en cours<i class=""></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable ui-sortable">
            

            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">Informations</h3>

                <div class="card-tools">
                  
                  
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
            <!--/.direct-chat -->

            <!-- TO DO List -->
            <div class="card">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Consultations
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list ui-sortable" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                   
                    <!-- checkbox -->
                   
                    <!-- todo text -->
                    <span class="text">Date du dernier produit acheté : </span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> {{$nia188}}</small>
                    <!-- General tools such as edit or delete-->
                   
                  </li>
                  <li>  
                    <span class="text">Dernier Acheteur</span>
                    <text class=""><i class=""></i>:{{$nia14}} 
                   
                  </text></li>
                  <li>
                  
                  
                    <span class="text">Dernier Utilisateur enregistré</span>
                    <text class=""><i class="">: {{$nia12}}</i></text>
                  
                  </li>
                  <li>
                    <span class="text">Total des comptes des administrateurs</span>
                    <text class=""><i class="">: {{$NUM222}}</i></text>
                   
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              </div>
            </div>
            <!-- /.card -->
          </div></section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         <div >
         <div class="calendar-wrapper" id="calendar-wrapper"></div>
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="http://localhost/cms2/css_cal/calendar.min.js"></script>
    <!-- <script src="calendar.js"></script> -->
    <script
      src="https://unpkg.com/codeflask/build/codeflask.min.js"></script>
    <script type="text/javascript">
      var datee=Date();
      var config = `
function selectDate(date) {
  $('#calendar-wrapper').updateCalendarOptions({
    date: date
  });
  console.log(calendar.getSelectedDate());
}

var defaultConfig = {
  weekDayLength: 1,
  date: '`+datee+`',
  onClickDate: selectDate,
  showYearDropdown: true,
  startOnMonday: false,
};

var calendar = $('#calendar-wrapper').calendar(defaultConfig);
console.log(calendar.getSelectedDate());
`;
      eval(config);
      const flask = new CodeFlask('#editor', { 
        language: 'js', 
        lineNumbers: true 
      });
      flask.updateCode(config);
      flask.onUpdate((code) => {
        try {
          eval(code);
        } catch(e) {}
      });
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script defer>
      fetch('https://raw.githubusercontent.com/wrick17/calendar-plugin/master/README.md')
        .then(response => response.text())
        .then(function(text) {
          const docs = text.split('**DOCS**')[1];
          document.getElementById('content').innerHTML = `
          <div>
            <h2>DOCS</h2>
            ${marked.parse(docs)}
          <div>
          `;
        });
    </script>
        </div>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2000-2022 Ahmed Triki.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

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
<body style="background-image: url('http://localhost/cms2/images/jiggle.jpg');">
  SESSION EXPIREE, VEUILLEZ VOUS CONNECTER A NOUVEAU
  
<li><a href="/cms2/public/adminlogin">Login</a></li>
@endif
      </body>
</html>