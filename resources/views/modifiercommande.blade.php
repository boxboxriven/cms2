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
  <form action="modifierproduit1" method="GET">
    @csrf
<div class="container">
  <h2>Modification d'une commande: </h2>            
  <table class="table">
    <head>
      <tr>
      <th>ID de la commande</th>
        <th>Adresse Du Client</th>
        <th>ID Du Client</th>
        <th>ID Du Produit </th>
        <th>Moyen de Payment</th>
        <th>Etat du paiement</th>
        
      </tr>
    </head>
    <body>
      <tr>
<tr>
      <td><input type="text" id="1" name="idcmd" disabled value="" ></td>
      <td><input type="integer" id="2" name="Adresse Du Client" disabled value="" ></td>
      <td><input type="integer" id="3" name="ID Du Client" disabled value="" ></td>
      <td><input type="integer" id="5" name="ID Du Produit" disabled value="" ></td>
      <td><input type="integer" id="6" name="Moyen de Payment" required value="" ></td>
      <td><input type="integer" id="7" name="Etat du paiement" required value="" ></td>
      <td><input type="number" id="4" name="id" hidden value="<?= $_REQUEST['rh'] ?>"></td>
</tr>
    </body>
  </table>
  <div>
  <input type="submit" class="btn btn-success" value="Modifier le produit" >
  </form>
  <a href="admin" class="btn btn-warning">Retour Arriére</a>
</html>