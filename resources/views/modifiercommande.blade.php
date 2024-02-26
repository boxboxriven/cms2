<html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <form action="modifiercommande1" method="GET">
    @csrf
<div class="container">
  <h2>Modification d'une commande: </h2>            
  <table class="table">
    <head>
      <tr>
      <th>ID de la commande</th>
        <th>Moyen de Payment</th>
        <th>Etat du paiement</th>
        
      </tr>
    </head>
    <body>
      <tr>
<tr>
      <td><input type="number" id="1" name="idcmd" hidden  value="<?= $_REQUEST['rh'] ?>" >
      <input type="number" id="1" name="iddd" disabled  value="<?= $_REQUEST['rh'] ?>" ></td>
      <td>
<select name="MoyendePayment" id="pet-select">
    <option value="">--Selectionner une option--</option>
    <option value="Payement En Ligne">Payement En Ligne </option>
    <option value="Payement Sur Place">Payement Sur Place</option>
    <option value="Payement Sur des Tranches">Payement Sur des Tranches</option>
    <option  value="Annulé">Annulé</option>
</select>
</td>
      <label for="pet-select">Choose a pet:</label>
      <td>
<select name="Etatdupaiement" id="pet-select">
    <option value="">--Selectionner une option--</option>
    <option value="En Cours de traitemnt">En Cours de traitemnt</option>
    <option value="Traité">Traité</option>
    <option value="Annulé">Annulé</option>
</select>
</td>

     
</tr>
    </body>
  </table>
  <div>
  <input type="submit" class="btn btn-success" value="Modifier la commande" >
  </form>
  <a href="admin" class="btn btn-warning">Retour Arriére</a>
</html>