@extends('master')
@section('content')
<div class="container custom-login">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <form id="social-login-form" action="{{ route('login') }}" method="POST">
        @csrf
        <input type="hidden" id="social-login-tokenId" name="tokenId" value="">
        <div class="form-group">
          <label style="font-family: Calibri; font-size: 25px;" for="exampleInputEmail1">Adresse email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Indiquer votre adresse email ici" required>
        </div>
        <div class="form-group">
          <label style="font-family: Calibri; font-size: 25px;" for="exampleInputPassword1">Mot De passe</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Indiquer votre adresse mot de passe ici">
        </div>
        <button style="font-family: Calibri; font-size: 25px;" type="submit" class="btn btn-default">Login</button>
      </form>
      <div class="mb-0 text-center">
        <a class="btn mt-3 shadow-lg bg-white rounded" href="{{ route('auth.google') }}">
          <img width="400px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://onymos.com/wp-content/uploads/2020/10/google-signin-button.png" />
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
