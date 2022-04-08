<?php
use  App\Http\Controllers\ProductController;
$total=0;
if (Session::has('user'))
$total= ProductController::cartItem();

?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style = "font-family:Calibri;font-size:25px;" class="navbar-brand" href="/cms2/public/">GPU-MasterTN</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
  
      <li style = "font-family:Calibri;font-size:25px;" class="active"><a href="/cms2/public/about">A Propos<span class="sr-only">(current)</span></a></li>
      <li  style = "font-family:Calibri;font-size:25px;" class="active"><a href="/cms2/public/contactpage">Nous Contacter<span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      @if(Session::has('user'))
      <li><a href="/cms2/public/myorders">Mes Achats</a></li>
        <li><a href="/cms2/public/cartlist">Panier({{$total}})</a></li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><span class="">{{Session::get('user')['name']}}</span></a>
        <ul class="dropdown-menu">
        <li><a href="/cms2/public/logout">Déconnexion</a></li>
          </ul>
        </li>
        @else
        <li style = "font-family:Calibri;font-size:25px;" ><a href="/cms2/public/login">Login</a></li>
        <li style = "font-family:Calibri;font-size:25px;" ><a href="/cms2/public/register">Register</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>