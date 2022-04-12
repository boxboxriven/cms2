<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de stock</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?=config('app.url');?>/cms2/resources/css1/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script
  src="<?=config('app.url');?>/cms2/resources/css1/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?=config('app.url');?>/cms2/resources/css1/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
{{View::make('header')}}
</head>
<body>
  
  @yield('content')
  {{View::make('footer')}}

</body>
<style>
  .custom-login {
    height: 500px;
    padding-top: 100px;
  }
  .slider-img  {
    height: 400px !important
  }
  .custom-product
  {
height: 600px;
  }
  .slider-text {
    background-color: #35443585 !important
  }
  .trending-image {
    height: 100px;
  }
  .trending-item {
    float:left;
    width :25%;
  }
  .trending-wrapper {
    margin:30px;
  }
  .detail-img {
    height: 500px;
  }
  .cart-list-devider{
    margin-bottom: 20px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 20px;
  }
</style>
</html>