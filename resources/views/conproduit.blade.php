
@if(Session::has('admin'))
<html>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form action="modifierproduit" method="post">
<div class="container">
  <h2>Informations relatives pour vos produits:</h2>        
  <table class="table">
    <head>
      <tr>
        <th>Nom Du Produit</th>
        <th>Prix du produit</th>
        <th>Prix du produit aprés promotion</th>
        <th>Quantité restante</th>
        <th>ID Du Produit</th>
        <th>Pourcentages de promotion</th>
        <th>Supprimer ce produit</th>
        <th>Modifier ce produit</th>
      </tr>
    </head>
    <body>
      <tr>
      <?php 
    foreach ($tab as $r){
      $variable1= $r->Nom ;
      $variable2= $r->Prix;
      $variable6= $r->Prix_promo;
      $variable3= $r->Qte;
      $variable4= $r->ID;
      $variable5= $r->Promotion;
      ?>
 <tr>
      <td > <?php echo $variable1  ?></td>
      <td > <?php echo $variable2  ?></td>
      <td > <?php echo $variable6  ?></td>
      <td > <?php echo $variable3  ?></td>
      <td > <?php echo $variable4  ?></td>
      <td > <?php echo $variable5  ?></td>
      <td><a class='btn btn-danger' href= 'http://localhost/cms2/public/suprimerproduit?rn=<?php echo $variable4;?>'>Delete</a></td>
      <td><a class='btn btn-info' href= 'http://localhost/cms2/public/modifierproduit?rh=<?php echo $variable4;?>'>Modifier Produit</a></td>
      </tr>
     <?php }
        ?>
    </body>
  </table>
  </form> 
  @else
<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
?>
<head>
  <title>SESSION EXPIREE</title>
</head>
  SESSION EXPIREE, VEUILLEZ VOUS CONNECTER A NOUVEAU
<li><a href="/cms2/public/adminlogin">Login</a></li>
@endif

  </html>