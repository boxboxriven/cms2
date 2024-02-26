<?php
use  App\Http\Controllers\ProductController;
$total=0;
if (Session::has('user'))
$total= ProductController::cartItem();

?>  
<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
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

<head>
<title>Nous contacter</title>
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
								<li><a href=" /cms2/public/cartlist"> Panier({{$total}})</a></li>
								<li><a href=" /cms2/public/myorders">Mes Achats</a></li>
								<li><a href=" /cms2/public/logout">Deconnexion de :  {{Session::get('user')['name']}}</a></li>
								@else
								<li><a href=" http://localhost/cms2/public/login">S'identifier</a></li>
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

    <section id="contact">
  <div class="contact-box">
    <div class="contact-links">
      <h2>ICI VOUS POUVEZ NOUS CONTACTER </h2>
     
    </div>
    
    <div class="contact-form-wrapper">
    <form action="contactpage1" method="get">
        <div class="form-item">
          
          
          <input placeholder="Nom"  type="text" name="firstname" required >
        </div>
        <div class="form-item">
          
        <input placeholder="Email"  type="email" name="email" required >
        </div>
        <div class="form-item">
          
          <input placeholder="Prenom"  type="text" name="lastname" required >
        </div>
        <div class="form-item">

        <input placeholder="Sujet"  type="text" name="sujet" required >
        </div>
        <div class="form-item">
          
        
          <textarea  name="message" required placeholder="Message" ></textarea>
        </div>
        <button class="submit-btn">Envoyer message</button>  
      </form>
    </div>
  </div>
</section>

</head>
</html>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap');

* {
  margin: 0;
  box-sizing: border-box;
}

body {
  background-color: #6a9ac4;
}

#contact {
  background-color: #6a9ac4;
  display: flex;
  justify-content: center;
  align-items: center;
}

.contact-box {
  width: clamp(100px, 90%, 1000px);
  margin: 80px 50px;
  display: flex;
  flex-wrap: wrap;
}

.contact-links, .contact-form-wrapper {
  width: 50%;
  padding: 8% 5% 10% 5%;
}


.contact-links {
  background-color: #1f2e43;
  background:
    radial-gradient(
      circle at 55% 92%, #426691 0 12%, transparent 12.2%
    ), 
    radial-gradient(
      circle at 94% 72%, #426691 0 10%, transparent 10.2%
    ), 
    radial-gradient(
      circle at 20% max(78%, 350px), #263a53 0 7%, transparent 7.2%
    ), 
    radial-gradient(
      circle at 0% 0%, #263a53 0 40%, transparent 40.2%
    ), 
    #1f2e43;
  border-radius: 10px 0 0 10px;
}

.contact-form-wrapper {
  background-color: #ffffff8f;
  border-radius: 0 10px 10px 0;
}

@media only screen and (max-width: 800px) {
  .contact-links, .contact-form-wrapper {
    width: 100%;
  }
  
  .contact-links {
    border-radius: 10px 10px 0 0;
  }
  
  .contact-form-wrapper {
    border-radius: 0 0 10px 10px;
  }
}

@media only screen and (max-width: 400px) {
  .contact-box {
    width: 95%;
    margin: 8% 5%;
  }
}

h2 {
  
  color: #fff;
  font-size: clamp(30px, 6vw, 60px);
  letter-spacing: 2px;
  text-align: center;
  transform: scale(.95, 1);
}

.links {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 50px;
}

.link {
  margin: 10px;
  cursor: pointer;
}

img {
  width: 45px;
  height: 45px;
  filter: 
    hue-rotate(220deg)
    drop-shadow(2px 4px 4px #0006);
  transition: 0.2s;
  user-select: none;
}

img:hover {
  transform: scale(1.1, 1.1);
}

img:active {
  transform: scale(1.1, 1.1);
  filter: 
    hue-rotate(220deg)
    drop-shadow(2px 4px 4px #222)
    sepia(0.3);
}

.form-item {
  position: relative;
}

label, input, textarea {
  
}

label {
  position: absolute;
  top: 10px;
  left: 2%;
  color: #999;
  font-size: clamp(14px, 1.5vw, 18px);
  pointer-events: none;
  user-select: none;
}

input, textarea {
  width: 100%;
  outline: 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 20px;
  padding: 12px;
  font-size: clamp(15px, 1.5vw, 18px);
}

input:focus+label, 
input:valid+label, 
textarea:focus+label, 
textarea:valid+label {
  font-size: clamp(13px, 1.3vw, 16px);
  color: #777;
  top: -20px;
  transition: all .225s ease;
}

.submit-btn {
  background-color: #fd917e;
  filter: drop-shadow(2px 2px 3px #0003);
  color: #fff;
  
  font-size: clamp(16px, 1.6vw, 18px);
  display: block;
  padding: 12px 20px;
  margin: 2px auto;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  user-select: none;
  transition: 0.2s;
}

.submit-btn:hover {
  transform: scale(1.1, 1.1);
}

.submit-btn:active {
  transform: scale(1.1, 1.1);
  filter: sepia(0.5);
}

@media only screen and (max-width: 800px) {
  h2 {
    font-size: clamp(40px, 10vw, 60px);
  }
}

@media only screen and (max-width: 400px) {
  h2 {
    font-size: clamp(30px, 12vw, 60px);
  }
  
  .links {
    padding-top: 30px;
  }
  
  img {
    width: 38px;
    height: 38px;
  }
}

body 
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
</style>