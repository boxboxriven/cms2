<?php
use  App\Http\Controllers\ProductController;
$total=0;
if (Session::has('user'))
$total= ProductController::cartItem();

?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=config('app.url');?>/cms2/styles/css/bootstrap.min.css">
<link href="<?=config('app.url');?>/cms2/styles/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=config('app.url');?>/cms2/styles/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?=config('app.url');?>/cms2/styles/css/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?=config('app.url');?>/cms2/styles/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?=config('app.url');?>/cms2/styles/css/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?=config('app.url');?>/cms2/styles/css/responsive.css">
<!DOCTYPE html>
<html lang="en">
<head>
  <title>A propos</title>
<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">1er Site Tunisien en partenariat avec Asus </div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->
								@if(Session::has('user'))
								<li class="language">
									<a href="/cms2/public/cartlist">
										Panier({{$total}})
										<i class="arrow down"></i>
									</a>
								</li>
								<li class="language">
									<a href="/cms2/public/myorders">
										Mes Achats
										<i class="arrow down"></i>
									</a>
								</li>
								<li class="account">
									<a href="/cms2/public/logout">
									Deconnexion de :  {{Session::get('user')['name']}}
										
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		@else
		<li class="language">
									<a href="http://localhost/cms2/public/login">
									S'identifer
										<i class="arrow down"></i>
									</a>
								</li>
								<li class="account">
									<a href="http://localhost/cms2/public/register">
									S'enregistrer
										<i class="arrow down"></i>
									</a>
									
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="/cms2/public/">Tunisie-<span>GPU</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="/cms2/public/">Accueil</a></li>
								<li><a href="/cms2/public/about">A Propos</a></li>
								<li><a href="/cms2/public/contactpage">Nous Contacter</a></li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
  <link rel="stylesheet" media="all" href="https://cdn.shopify.com/shopifycloud/brochure/assets/application-b89bda94c5a8d73f1b252e94930d2f98c09d0554fc7c72c241187d1a2d491ed4.css">
  <link rel="stylesheet" media="screen" href="https://cdn.shopify.com/shopifycloud/brochure/assets/manifests/about-acf30d40008e759a13f0a6665b0687e6380f781bc68bc1299be8d56bd43161a0.css">
  <link rel="alternate" hreflang="en" href="https://www.shopify.com/about">
<section class="section about-hero">
  <div class="grid about-hero__grid">
    <div class="grid__item grid__item--tablet-up-half about-hero__content">
      <div class="section-heading gutter-bottom--reset">
        <p class="section-heading__kicker heading--5 text-left--tablet-up text-center--mobile color-black">A Propos</p>
        <h1 class="section-heading__heading heading--1 text-left--tablet-up text-center--mobile about-hero__heading">{{$DESCRIPTION2}}</h1>
        <p class="section-heading__subhead heading--2 heading--3 text-left--tablet-up text-center--mobile">Numero de contact : +216 {{$NUMEROFIXE}}</p>
</div></div>    <div class="grid__item grid__item--tablet-up-half about-hero__image-container">
  <img src="https://hrmcdn-13a1c.kxcdn.com/images/hr-sg/content-images/aditi-nov-2020-working-alone-office-123rf.jpg"
</html>