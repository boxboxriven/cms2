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
  <form action="http://localhost/cms2/public/ajouterclient1" method="POST">
    @csrf
<div class="container">
  <h2>Ajout d'un Client : </h2>            
  <table class="table">
    <head>
      <tr>
        <th>Nom Du Client</th>
        <th>Email Du Client</th>
        <th>ID Du Client</th>
        <th>Mot de passe </th>
      </tr>
    </head>
    <body>
      <tr>
 <tr>
      <td><input type="text" id="1" name="nom" required></td>
      <td><input type="text" id="2" name="email" required></td>
      <td><input type="number" id="3" name="id" required></td>
      <td><input type="password" id="4" name="mdp" required></td>
      </tr>
    </body>
  </table>
  <input type="submit" class="btn btn-success" value="Ajouter le Client" >
  </form>
  <a href="admin" class="btn btn-warning"> Retour </a>
</html>