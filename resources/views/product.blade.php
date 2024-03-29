@extends('master')
@section("content")
<div class=" custom-product">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
   @foreach($products as $item)
   <div class="item {{$item['id']==18?'active':''}}">
       <a href="detail/{{$item['id']}}">
      <img class="slider-img" src="{{$item['gallerie']}}">
      <div class="carousel-caption slider-text">
        <h3 style = "font-family:Calibri;font-size:25px;" >{{$item['name']}}</h3>
        <p style = "font-family:Calibri;font-size:25px;" >{{$item['description']}}</p>
      </div>
    </div>
    @endforeach
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span style = "font-family:Calibri;font-size:25px;" class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="trending-wrapper">
    <h3 style = "font-family:Calibri;font-size:25px;" >Nouveaux Produits</h3>
    @foreach($products as $item)
   <div class="trending-item">
   <a href="detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallerie']}}">
      <div class="">
        <h3 style = "font-family:Calibri;font-size:25px;" >{{$item['name']}}</h3>
        
      </div>
</a>
    </div>
    
    @endforeach
  </div>
</div>
</div>
@endsection