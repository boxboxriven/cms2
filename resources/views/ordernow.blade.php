@extends ('master')
@section ("content")
<div class="custom-product">
    <div class="col-sm-10">
       <table class="table">
       <tbody>
         <tr>
           <td>Montant</td>
           <td>{{$total}} DT</td>
         </tr>
         <tr>
           <td>Tax (Fixé pour Toutes les Articles)</td>
           <td>5 DT </td>
         </tr>
         <tr>
           <td>Livraison (Fixé pour Toutes les Articles)</td>
           <td>10 DT</td>
         </tr>
         <tr>
           <td>Total A Payer</td>
           <td>{{$total+15}} DT</td>
         </tr>
       </tbody>
     </table>
     <div>
     <form action="orderplace" method="get">
        @csrf
  <div class="form-group">
    <textarea name="adress" type="text" placeholder="Entrer Votre Adresse Ici" class="form-control" required ></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Methode de payement</label> <br> <br>
    <p>
    <input type="radio" value="cash" name="payment"> <span>Payement En Ligne</span> <br> <br>
    <input type="radio" value="cash" name="payment"> <span>Payement Sur Place</span> <br> <br>
    <input type="radio" value="cash" name="payment"> <span>Payement Sur des Tranches</span> <br> <br>
    </p>
  </div>
  </div>
  <button type="submit" class="btn btn-default">Continuer</button>
</form>
     </div>
    </div>
</div>
@endsection