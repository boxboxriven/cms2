@extends('master')
@section("content")
<!DOCTYPE html>
<html lang="en">

<head>
<title>About us </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}

/* Header/Logo Title */
.header {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 25px;
}

/* Page Content */
.content {padding:20px;}
</style>
</head>

<body>

<div class="header">
  <h1 style = "font-family:Calibri;font-size:25px;" >{{$DESCRIPTION2}}</h1>
  <h1 style = "font-family:Calibri;font-size:25px;">Numero de contact : {{$NUMEROFIXE}}</h1>
  <a style = "font-family:Calibri;font-size:50px;" href="http://localhost/cms2/public/">Retour Vers la page Principale</a>
</div>
<div style="clear:both" class="panel panel-default">
  <div class="panel-footer"> </div>
</div>
</body>
</html>
@endsection