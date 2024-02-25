@extends ('master')
@section ("content")
<div class="custom-product">
    <div class="col-sm-10">
       <table class="table">
       <tbody>
         <tr>
           <td><strong><font size="4">Montant hors taxes</font> </strong></td>
           <td><strong><font size="4">{{$total}} DT</font></strong></td>
         </tr>
         <tr>
           <td><strong><font size="4"> Taxes </font></strong></td>
           <td><strong><font size="4">{{($total*19)/100}} DT</font></strong></td>
         </tr>
         <tr>
           <td><strong><font size="4">Frais de Livraison</font></strong></td>
           <td><strong><font size="4">10 DT</font></strong></td>
         </tr>
         <tr>
           <td><strong><font size="4">Total A Payer</font></strong></td>
           <td><strong><font size="4">{{$total+(($total*19)/100)+10}} DT</font></strong></td>
           
         </tr>
       </tbody>
     </table>
     <div>
     <form action="orderplace" method="get">
        @csrf
  <div class="form-group">
  <label ><font size="4">Adresse de livraison</font></label> <br> <br>
  <input style="font-size:25px;" name="adress" type="Textarea" placeholder="Adresse de livraison" class="form-control" required >
  </div>
  <div class="form-group">
    <label for="pwd">Methode de payement</label> <br> <br>
    <p>
    <input type="radio" value="En Ligne" name="payment"><span><strong><font size="4">Payement En Ligne</font></strong></span> <br> <br>
    <input type="radio" value="Espéces" name="payment"><span><strong><font size="4">Payement Sur Place</font></strong></span> <br> <br>
    <input type="radio" value="Par des tranches" name="payment"> <span><strong><font size="4">Payement Sur des Tranches</font></strong></span> <br> <br>
    </p>
  </div>
  </div>
  <button type="submit" class="btn btn-success"><strong><font size="4">Continuer</font></strong></button>
</form>
     </div>
    </div>
</div>
@endsection