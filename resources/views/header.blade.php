<?php
use  App\Http\Controllers\ProductController;
$total=0;
if (Session::has('user'))
$total= ProductController::cartItem();

?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=config('app.url');?>/cms2/styles/css/bootstrap.min.css">
<link href="<?=config('app.url');?>/cms2/styles/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=config('app.url');?>/cms2/styles/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?=config('app.url');?>/cms2/styles/css/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?=config('app.url');?>/cms2/styles/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?=config('app.url');?>/cms2/styles/css/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?=config('app.url');?>/cms2/styles/css/responsive.css">
<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">E-Lectronic</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->
							
								<li class="language">
									<a href="/cms2/public">
									Accueil
										<i class="arrow down"></i>
									</a>
								</li>
								<li class="language">
									<a href="/cms2/public/about">
										 A Propos
										<i class="arrow down"></i>
									</a>
								</li>
								<li class="account">
									<a href="/cms2/public/contactpage">
									 Nous Contacter
										
									</a>
								</li>
							</ul>
						</div>

						<div class="top_nav_left">Cabinet Dr. Med Chokri Triki</div>
					</div>
					<div class="col-md-6 text-right">
								<li class="language">
									<a href="/cms2/public">
									V 1.0

									</a>
								</li>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="/cms2/public/">Bienvenue <span></span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
							@if(Session::has('user'))
							    <li><a href=" /cms2/public/cartlist"> Panier({{$total}})</a></li>
								<li><a href=" /cms2/public/myorders">Mes Achats</a></li>
								<li><a href=" /cms2/public/logout">Deconnexion de :  {{Session::get('user')['name']}}</a></li>
								@else

								<li><a href=" http://localhost/cms2/public/login">S'identifier</a></li>

								<li style="font-size=20" ><a href=" http://localhost/cms2/public/login">S'identifier</a></li>

								<li><a href=" http://localhost/cms2/public/register">S'enregistrer</a></li>
								@endif
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>