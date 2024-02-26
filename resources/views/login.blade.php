@extends('master')
@section("content")
<div class="container custom-login">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">

    <form action="login" method="POST">
  <div class="form-group">
      @csrf
    <label style = "font-family:Calibri;font-size:25px;" for="exampleInputEmail1">Adresse email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Indiquer votre adresse email ici" required>
  </div>
  <div class="form-group">
    <label style = "font-family:Calibri;font-size:25px;" for="exampleInputPassword1">Mot De passe</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Indiquer votre adresse mot de passe ici">
  </div>
  <button style = "font-family:Calibri;font-size:25px;" type="submit" class="btn btn-default">Login</button>
    </form>
    </div>
  </div>
</div>
      @endsection