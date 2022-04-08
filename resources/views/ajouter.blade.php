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
  <form action="http://localhost/cms2/public/ajouter1" method="post">
    @csrf
<div class="container">
  <h2>Ajout d'un produit: </h2>            
  <table class="table">
    <head>
      <tr>
        <th>Nom Du Produit</th>
        <th>Prix du produit</th>
        <th>Quantitée</th>
        <th>ID Du Produit</th>
        <th>Catégorie</th>
        <th>Description</th>
        <th>Gallerie </th>
        <th>Promotion</th>
      </tr>
    </head>
    <body>
      <tr>
 <tr>
      <td><input type="text" id="1" name="nom" required></td>
      <td><input type="integer" id="2" name="prix" required></td>
      <td><input type="integer" id="3" name="qte" required></td>
      <td><input type="integer" id="4" name="id" required></td>
      <td><input type="integer" id="5" name="catégorie" required></td>
      <td><input type="integer" id="6" name="description" required></td>
      <td><input type="integer" id="7" name="gallerie" required></td>
      <td><input type="integer" id="8" name="promotion" required></td>
      </tr>
    </body>
  </table>
  <input type="submit" class="btn btn-success" value="Ajouter le produit" >
  </form>
  <a href="admin" class="btn btn-warning">Retour Arriére </a>
</html>