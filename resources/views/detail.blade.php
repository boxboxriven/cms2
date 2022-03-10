@extends('master')
@section("content")
<div class=" container ">
   <div class="row">
      <div class="col-sm-6">
      <img class="detail-img" src="{{$product['gallerie']}}" alt="">
    </div>
    <div class="col-sm-6" >
        <a href="http://localhost/cms2/public/">Retour Arriére</a>
        <div class="badge badge-pill badge-info">{{$stock}}</div>
        <h2>{{$product['name']}}</h2>
        <h3>Price : {{$product['price']}}</h3>
        <h3>Description : {{$product['description']}}</h3>
        <h4>Catégorie : {{$product['catégorie']}}</h4>
        <br><br>
        @if ($stock === 'disponible')
        <form action="add_to_cart/{{$product['id']}}"  method="get">
        @csrf
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        <button class="btn btn-primary">Add To Cart</button>
        </form>
        @endif
        <br><br>
        <form action="buynow/{{$product['id']}}"  method="get">
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        </form>
        <br><br>
    </div>
</div>
</div>
@endsection