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
  <div>
  <a href="http://localhost/cms2/public/ajouter" class="btn btn-success">Ajouter Un Produit </a>
  </div>
  <form action="iwillchange2" method="post">
  <h2>Informations relatives pour vos clients:</h2>            
  <table class="table">
    <head>
      <tr>
        <th>Nom Du Client </th>
        <th>Email Du Client</th>
        <th>ID Du Client</th>
        <th>Banissement</th>
      </tr>
    </head>
    <body>
      <tr>
      <?php 
    foreach ($tab1 as $f){
      $variable1= $f->name;
      $variable2= $f->email;
      $variable3= $f->id;
      ?>
 <tr>
      <td><?php echo $variable1 ?></td>
      <td><?php echo $variable2 ?></td>
      <td><?php echo $variable3 ?></td>
      <td><a class='btn btn-danger' href= 'http://localhost/cms2/public/supprimerclient?rn=<?php echo $variable3;?>'>Supprimer Client</a></td>
      </tr>
      <?php }
        ?>
        </form>
    </body>
     
  </table>
  <a href ="http://localhost/cms2/public/ajouterclient" type="button" class="btn btn-success">Ajouter Un Client </a>
  <form action="iwillchange3" method="post">
  <h2>Informations relatives pour les commandes des clients : </h2>            
  <table class="table">
    <head>
      <tr>
        <th>Adresse Du Client</th>
        <th>ID Du Client</th>
        <th>ID Du Produit </th>
        <th>Moyen de Payment</th>
        <th>Etat du paiement</th>
        <th>Supprimer une commande</th>
        
      </tr>
    </head>
    <body>
      <tr>
      <?php 
    foreach ($tab3 as $i){
      $variable1= $i->Adresse;
      $variable2 = $i->IDClient;
      $variable3= $i->IDProduit;
      $variable4= $i->PM;
      $variable5= $i->PS;
      ?>
      <tr>
      <td><?php echo $variable1 ?></td>
      <td><?php echo $variable2 ?></td>
      <td><?php echo $variable3 ?></td>
      <td ><?php echo $variable4 ?></td>
      <td ><?php echo  $variable5 ?></td>  
      <td><a class='btn btn-danger' href= 'http://localhost/cms2/public/supprimercommande?rn=<?php echo $variable3;?>'>Supprimer Commande</a></td>
      </tr>
      <?php }
        ?>
        </form> 
    </body>
  </table>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Buttons</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<a href='http://localhost/cms2/public/' type="button" style="margin:5px;" class="btn btn-success">Vers le site web</a> 
<a class="btn btn-danger" href="/cms2/public/logoutadmin">Déconnexion</a></li>
<a class="btn btn-info" href="/cms2/public/admincontact1">Consulter Les Commentaires </a></li>
<a class="btn btn-primary" href="/cms2/public/editapropos">Modifier la page a propos</a></li>
</body>
</html>
</body>
</html>
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