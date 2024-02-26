@extends ('master')
@section ("content")
<div class="custom-product">
    <div class="col-sm-10">
       <table class="table">
       <tbody>
         <tr>
           <td>Montant hors taxes</td>
           <td>{{$total}} DT</td>
         </tr>
         <tr>
           <td>Taxes </td>
           <td>{{($total*19)/100}} DT</td>
         </tr>
         <tr>
           <td>Livraison (Fixe pour Tout les Articles)</td>
           <td>10 DT</td>
         </tr>
         <tr>
           <td>Total A Payer</td>
           <td>{{$total+(($total*19)/100)+10}} DT</td>
         </tr>
       </tbody>
     </table>
     <div>
     <form action="orderplace" method="get">
        @csrf
  <div class="form-group">
    <input name="adress" type="text" placeholder="Adresse de livraison" class="form-control" required >
  </div>
  <div class="form-group">
    <label for="pwd">Methode de payement</label> <br> <br>
    <p>
    <input type="hidden" name="total" value="{{$total+(($total*19)/100)+10}}">
    <input type="radio" value="En Ligne" name="payment"> <span>Payement En Ligne</span> <br> <br>
    <input type="radio" value="Espéces" name="payment"> <span>Payement Sur Place</span> <br> <br>
    <input type="radio" value="Par des tranches" name="payment"> <span>Payement Sur des Tranches</span> <br> <br>
    </p>
  </div>
  </div>
  <button type="submit" class="btn btn-success"><strong><font size="4">Continuer</font></strong></button>
</form>
     </div>
    </div>
</div>
@endsection