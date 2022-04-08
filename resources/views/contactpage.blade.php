@extends('master')
@section("content")
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body style="background-image: url('https://phototrend.fr/wp-content/uploads/2019/01/capture-photo-195-mpx-2.jpg');">
<div class="container">
  <form action="contactpage1" method="get">
    <label style = "font-family:Calibri;font-size:25px;" for="fname">Votre Nom </label>
    <input style = "font-family:Calibri;font-size:20px;" type="text" id="fname" name="firstname" placeholder="Votre nom ici">

    <label style = "font-family:Calibri;font-size:25px;" for="lname">Votre Prenom </label>
    <input style = "font-family:Calibri;font-size:20px;" type="text" id="lname" name="lastname" placeholder="Votre Prenom ici">
    <label style = "font-family:Calibri;font-size:25px;" for="subject">Sujet</label>
    <textarea style = "font-family:Calibri;font-size:20px;" id="subject" name="subject" placeholder="Ecrire vos commentaires ici" style="height:200px"></textarea>
    <input style = "font-family:Calibri;font-size:25px;" type="submit" value="Envoyer">
  </form>
</div>

</body>
</html>
@endsection