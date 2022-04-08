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
  <form action="intermediaire" method="post"></form>
<div class="container">
  <h1>CETTE SECTION EST RESERVEE POUR LES ADMINISTRATEURS</h1>
  <h2>Consultation des informations relatives pour vos produits : </h2>            
  <table class="table">
    <head>
      <tr>
        <th>Nom Du Produit</th>
        <th>Prix du produit</th>
        <th>Quantité restante</th>
        <th>ID Du Produit</th>
        
      </tr>
    </head>
    <body>
      <tr>
      <?php 
    foreach ($tab as $r){
      $variable1= $r->Nom;
      $variable2= $r->Prix;
      $variable3= $r->Qte;
      $variable4= $r->ID;
      ?>
 <tr>
      <td><?php echo $variable1  ?></td>
      <td><?php echo $variable2 ?></td>
      <td><?php echo $variable3  ?></td>
      <td><?php echo $variable4 ?></td>
      </tr>
     <?php }
        ?>
    </body>
  </table>
  <h2>Consultation des informations relatives pour vos clients : </h2>            
  <table class="table">
    <head>
      <tr>
        <th>Nom Du Client</th>
        <th>Email Du Client</th>
        <th>ID Du Client</th>
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
      </tr>
      <?php }
        ?>
    </body>
  </table>
  <h2>Consultation des informations relatives pour les commandes des clients :   </h2>            
  <table class="table">
    <head>
      <tr>
        <th>Adresse Du Client</th>
        <th>ID Du Client</th>
        <th>ID Du Produit </th>
        <th>Moyen de Payment</th>
        <th>Etat du paiement</th>
        
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
      <td><?php echo $variable4 ?></td>
      <td><?php echo $variable5 ?></td>
      </tr>
      <?php }
        ?>
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

  <a href='http://localhost/cms2/public/AdminMDF' type="button" style="margin:5px;" class="btn btn-success">Passez a la modification (Vers la page de modification)</button>
</form>

  <a href='http://localhost/cms2/public/' type="button" style="margin:5px;" class="btn btn-primary">  Consulter Votre Site Web  (Vers le site)</button>

</body>
</html>
