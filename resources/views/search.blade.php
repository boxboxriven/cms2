<?php
use  App\Http\Controllers\SearchController;
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
							<a href="/cms2/public/">Tunisie-<span>GPU</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
							@if(Session::has('user'))
							<!doctype html>
<html>
<head>
<style>

</style>
</head>

</html>
								
								<li><a href=" /cms2/public/cartlist"> Panier({{$total}})</a></li>
								<li><a href=" /cms2/public/myorders">Mes Achats</a></li>
								<li><a href=" /cms2/public/logout">Deconnexion de :  {{Session::get('user')['name']}}</a></li>
								<li><body>
<form method="get" action="http://localhost/cms2/public/search">				
	<div class="input-group">
  <input name="search" type="search" class="form-control rounded" placeholder="Rechercher" aria-label="Search" aria-describedby="search-addon" required />
  <button type="submit" class="btn btn-outline-primary">Rechercher</button>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</div>	
</form>
</body>
</li>	
								@else
								
								<li><a href=" http://localhost/cms2/public/login">S'identifier</a></li>
								<li><a href=" http://localhost/cms2/public/register">S'enregistrer</a></li>
								<li><body>
<form method="get" action="http://localhost/cms2/public/search">				
	<div class="input-group">
  <input name="search" type="search" class="form-control rounded" placeholder="Rechercher" aria-label="Search" aria-describedby="search-addon" required />
  <button type="submit" class="btn btn-outline-primary">Rechercher</button>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</div>	
</form>
</body>
</li>	
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

</header><br><br><br><br><br><br><br><br><br>
<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">Resultats</li>

						</ul>
					</div>
				</div>
			</div>
<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
<?php if(isset($products)){?>
<?php foreach($products as $item){ ?>

<div class="product-item men">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="<?php echo $item->gallerie; ?>" alt="">
                                </div>	
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-<?php echo $item->Promotion; ?> %</span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="detail/<?php echo $item->id; ?>"><?php echo $item->name; ?></a></h6>
									<div class="product_price"><?php echo $item->price_promo; ?> DT<span><?php echo $item->price; ?> DT</span></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="detail/<?php echo $item->id; ?>">Ajouter au panier</a></div>
						</div>
<?php } ?>
<?php } ?>
		
</div>
				</div>
			</div>
			<div style="text-align: center; font-size: 50px;">
<?php if(isset($productsnot)){?>
	<?php echo "Pas de résultats"; ?>
<?php } ?>
</div>
<script src="<?=config('app.url');?>/cms2/styles/css/jquery-3.2.1.min.js"></script>
<script src="<?=config('app.url');?>/cms2/styles/css/popper.js"></script>
<script src="<?=config('app.url');?>/cms2/styles/css/bootstrap.min.js"></script>
<script src="<?=config('app.url');?>/cms2/styles/css/isotope.pkgd.min.js"></script>
<script src="<?=config('app.url');?>/cms2/styles/css/owl.carousel.js"></script>
<script src="<?=config('app.url');?>/cms2/styles/css/easing.js"></script>
<script src="<?=config('app.url');?>/cms2/styles/css/custom.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<table class="t1" style="width:100%; padding:20px; margin-top:50px; margin-bottom:10px; text-align: left;
		background-color:#f2f2f2">
<tr>
	<td style="width:15%; height: 250px;">
							<a href="/cms2/public/"><img class="fit-picture"
     src="<?=config('app.url');?>/cms2/images/8ok.png"
     alt="TUNISIE-GPU"></a>
						</td>
	<td style="width:20%; line-height: 40px; padding-left:70px;">Contact<br>
Tel:27680223 
<br style=" line-height: 40px;" 	> Email:ahmedtriki.triki5@gmail.com</td>
	<td style="width:65%;"><div class="newsletter" style="margin-top:0px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center " style=" line-height: 40px;">
						<h4 style=" line-height: 40px;">S'abonner a notre courrier éléctronique</h4>
						<p style=" line-height: 40px;" >Abonnez vous et recevez toutes les nouvelles instantanément sur votre mail</p>
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
	</div></td>
</tr>
</table>