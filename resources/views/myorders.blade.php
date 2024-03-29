@extends ('master')
@section ("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
        <?php
        $admins= DB::table('orders')
        ->select('*')
        ->count();
        ?>
        @if ($admins>0)
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
                  <h5>Quantité Selectionée : {{$item->Amount}}</h5>
                 </div>
              </div>
              </div>
              @endforeach
              </div>
              @else
              Il n'ya pas encore des produits, revenez vers le panier et appuyez commander maintenant.
@endif
    </div>
</div>
<style>
</style>
@endsection