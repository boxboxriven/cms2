@extends ('master')
@section ("content")
<div class="custom-product">
    <div class="col-sm-10">
       <table class="table">
       <tbody>
         <tr>
           <td>Montant</td>
           <td> DT</td>
         </tr>
         <tr>
           <td>Tax</td>
           <td>5 DT </td>
         </tr>
         <tr>
           <td>Livraison</td>
           <td>10 DT</td>
         </tr>
         <tr>
           <td>Total A Payer</td>
           <td> DT</td>
         </tr>
       </tbody>
     </table>
     <div>
     <form action="/action_page.php">
  <div class="form-group">
    <textarea type="text" placeholder="Entrer Votre Adresse Ici" class="form-control" ></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Methode de payement</label> <br> <br>
    <p>
    <input type="radio" name="payment"> <span>Payement En Ligne</span> <br> <br>
    <input type="radio" name="payment"> <span>Payement Sur Place</span> <br> <br>
    <input type="radio" name="payment"> <span>Payement Sur des Tranches</span> <br> <br>
    </p>
  </div>
  </div>
  <button type="submit" class="btn btn-default">Continuer</button>
</form>
     </div>
    </div>
</div>
@endsection