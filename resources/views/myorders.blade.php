@extends ('master')
@section ("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
          <h4>Mes Achats</h4>
          <br>
          @foreach($orders as $item)
          <div class="row searchfiled-item cart-list-devider">
              <div class=col-sm-3> 
              <a href="detail/{{$item->id}}">
                  <img class="trending-image" src="{{$item->gallerie}}">
              </div>
              <div class=col-sm-4> 
                  <div class="">
                  <h2>Nom : {{$item->name}}</h2>
                  <h5>Status de Livraison : {{$item->status}}</h5>
                  <h5>Addresse : {{$item->adress}}</h5>
                  <h5>Status de paiement : {{$item->payment_status}}</h5>
                  <h5>Moyen de payement : {{$item->payment_method}}</h5>
                 </div>
              </div>
              </div>
              @endforeach
              </div>
    </div>
</div>
@endsection