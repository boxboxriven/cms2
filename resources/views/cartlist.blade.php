@extends ('master')
@section ("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
          <h4>Résultats</h4>
          <br>
          @foreach($products as $item)
          <div class="row searchfiled-item cart-list-devider">
              <div class=col-sm-3> 
              <a href="detail/{{$item->id}}">
                  <img class="trending-image" src="{{$item->gallerie}}">
              </div>
              <div class=col-sm-4> 
                  <div class="">
                  <h2>Qte Demandée :{{$item->cart_TotalAmount}}</h2>
                  <h2>{{$item->name}}</h2>
                  <h5>{{$item->description}}</h5>
                 </div>
              </div>
              <div class=col-sm-3> 
                  <a href="/cms2/public/removecart/{{$item->product_id}},{{$item->cart_id}}" class="btn btn-warning">Supprimer du panier</a></button> 
              </div>
              </div>
              @endforeach
              </div>
              <a class="btn btn-success" href="ordernow">Commander Maintenant</a> <br> <br>
    </div>
</div>
@endsection