<!DOCTYPE html>
<html lang="en">
<head>
  <title>Commentaires</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vous pouvez ici consulter les commentaires </h2>     
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Commentaire</th>
        <th>Supprimer le commentaire</th>
        <th>Repondre au commentaire</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php
    foreach ($tablo as $i){
      $variable0= $i->id;  
      $variable1= $i->Nom;
      $variable2= $i->Prenom;
      $variable3= $i->Sujet;
      ?>
      <td><?php echo $variable0 ?></td>
      <td><?php echo $variable1 ?></td>
      <td><?php echo $variable2 ?></td>
      <td><?php echo $variable3  ?></td>
      <td><a class='btn btn-danger' href= 'http://localhost/cms2/public/supprimercommentaire?rn=<?php echo $variable0;?>'>Supprimer le commentaire</a></td>
      <td><a class='btn btn-success' href= 'http://localhost/cms2/public/repondrecommentaire?rn=<?php echo $variable0;?>'> Repondre au commentaire</a></td>
      </tr>
      <?php }
        ?>
    </tbody>
  </table>
</div>

</body>
</html>
