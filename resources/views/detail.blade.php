@extends('master')
@section("content")
<div class=" container ">
   <div class="row">
      <div class="col-sm-6">
      <img class="detail-img" src="{{$product['gallerie']}}" alt="">
    </div>
    <div class="col-sm-6" >
        <a href="cms2/public/">Retour Arriére</a>
        <div class="badge badge-pill badge-info">{{$stock}}</div>
        <h2>Nom du produit : {{$product['name']}}</h2>
        <h2>Prix : {{$product['price']}} DT</h2>
        <h2>Description : {{$product['description']}}</h2>
        <h2>Catégorie : {{$product['catégorie']}}</h2>
        <h2>stock : {{$product['stock']}}</h2>
        
        <br><br>
        @if ($stock === 'disponible')
        <form action="add_to_cart/{{$product['id']}}"  method="get">
        <h2> 
        <label for="tentacles">Quantité</label>
        <span >
        <input type="number" id="qte" name="quantity" placeholder="Entrer la qte souhaitée" 
        min="1" max= {{$product["stock"]}}  required value="1" >
        </span>
        </h2>
        @csrf
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        <button class="btn btn-primary">Ajouter au panier</button>
        </form>
        @endif
        <br><br>
        <form action="buynow/{{$product['id']}}"  method="get">
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        </form>
        
    </div>
</div>
</div>
@endsection
<style>

input:invalid+span:after {
  content: '✖';
  padding-left: 5px;
}

input:valid+span:after {
  content: '✓';
  padding-left: 5px;
}
</style>