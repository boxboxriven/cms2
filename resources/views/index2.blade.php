<?php
use  App\Http\Controllers\ProductController;
$total=0;
if (Session::has('user'))
$total= ProductController::cartItem();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Tunisie GPU</title>
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
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

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

</header>
	<!-- Slider -->

	<div class="main_slider" style="background-image:url(https://www.wallpapertip.com/wmimgs/9-97560_assassins-creed-1-wallpaper-4k.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						
						<h1>Bénéficier jusqu'au 50% de remise sur les articles*</h1>
						<h6>* : Seulemnts les articles applicables</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Slider -->	
	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Nos Produits</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">Toutes les cartes</li>
							
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Product 1 -->
						@foreach($products as $item)
						<div class="product-item men">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="{{$item['gallerie']}}" alt="">
                                </div>	
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-{{$item['Promotion']}} %</span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="detail/{{$item['id']}}">{{$item['name']}}</a></h6>
									<div class="product_price">{{$item['price_promo']}} DT<span>{{$item['price']}} DT</span></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="detail/{{$item['id']}}">Ajouter au panier</a></div>
						</div>
						@endforeach
						<!-- Product 9 -->

						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Newsletter -->
	@if(Session::has('user'))
	<span>	</span>
	@else
	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>S'abonner a notre courrier éléctronique</h4>
						<p>Abonnez vous et recevez une remise de 10% sur votre prochain article</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="abonnement">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input name="abonnement" id="newsletter_email" type="email" placeholder="Votre E-mail" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">S'abonner</button>
						</div>
					</form>
				</div>	
			</div>
		</div>
	</div>
	@endif
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="/cms2/public/contactpage">Questions ? N'hesitez pas a nous contacter</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">2022 Tous les droits resérvées par  <span>Triki's</span>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="<?=config('app.url');?>/cms2/styles/css/jquery-3.2.1.min.js"></script>
<script src="<?=config('app.url');?>/cms2/styles/css/popper.js"></script>
<script src="<?=config('app.url');?>/cms2/styles/css/bootstrap.min.js"></script>
<script src="<?=config('app.url');?>/cms2/styles/css/isotope.pkgd.min.js"></script>
<script src="<?=config('app.url');?>/cms2/styles/css/owl.carousel.js"></script>
<script src="<?=config('app.url');?>/cms2/styles/css/easing.js"></script>
<script src="<?=config('app.url');?>/cms2/styles/css/custom.js"></script>
</body>

</html>
