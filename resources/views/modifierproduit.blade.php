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
  <h2>Modification d'un produit: </h2>            
  <table class="table">
    <head>
    <?php
    foreach ($tab as $i){
      $name= $i->name;
      $price= $i->price;
      $qte= $i->qte;
      $catégorie= $i->catégorie;
      $description= $i->description;
      $gallerie= $i->gallerie;
      $promotion= $i->promotion;
      $id= $i->id;
      ?>
      <?php }
        ?>
      <tr>
        <th>Nom Du Produit</th>
        <th>Prix du produit</th>
        <th>Quantitée</th>
        <th>Catégorie</th>
        <th>Description</th>
        <th>Gallerie</th>
        <th>Promotion </th>
        
      </tr>
    </head>
    <body>
      <tr>
<tr>

      <td><input type="text" id="1" name="nom" required value="{{$name}}" ></td>
      <td><input type="integer" id="2" name="prix" required value="{{$price}}" ></td>
      <td><input type="integer" id="3" name="qte" required value="{{ $qte}}" ></td>
      <td><input type="integer" id="5" name="catégorie" required value="{{$catégorie}}" ></td>
      <td><input type="integer" id="6" name="description" required value="{{$description}}" ></td>
      <td><input type="integer" id="7" name="gallerie" required value=" {{$gallerie}}" ></td>
      <td><input type="integer" id="8" name="promotion" required value="{{$promotion}}"></td>
      <td><input type="number" id="4" name="id" hidden value="<?= $_REQUEST['rh'] ?>"></td>
</tr>
    </body>
  </table>
  <div>
  <input type="submit" class="btn btn-success" value="Modifier le produit" >
  </form>
  <a href="admin" class="btn btn-warning">Annuler Modifications</a>
</html>