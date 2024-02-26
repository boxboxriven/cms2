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
    <div class="mb-0 text-center">

                  <a class="btn mt-3 shadow-lg bg-white rounded"  onClick="socialSignin('google');">
                    <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                    <span class="fa fa-google"></span> Sign in with Google
                  </a>
    </div>
  </div>

</div>

<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <script>
          var config = {
            apiKey: "AIzaSyCb8E-OY-HyMSL4cW6bltRr4F7KdrPcc4M",
  authDomain: "patisseriedaoud.firebaseapp.com",
  projectId: "patisseriedaoud",
  storageBucket: "patisseriedaoud.appspot.com",
  messagingSenderId: "412574467583",
  appId: "1:412574467583:web:3d151783594019a90393ca",
  measurementId: "G-XEYHSH6C9S"         
      };
      firebase.initializeApp(config);
    
      var googleProvider = new firebase.auth.GoogleAuthProvider();
      var googleCallbackLink = '/login/google/callback';
      async function socialSignin(provider) {
                     document.getElementById('social-login-form').action = googleCallbackLink;
         }
      firebase.auth().signInWithPopup(googleProvider).then(function(result) {
            result.user.getIdToken().then(function(result) {
               document.getElementById('social-login-tokenId').value = result;
               document.getElementById('social-login-form').submit();
            });
         }).catch(function(error) {
            // do error handling
            console.log(error);
         });
      
      </script>

      @endsection
