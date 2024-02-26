
@extends('master')
@section("content")
<div class="container custom-login">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
    <button (click)="signin()">
    SIGN IN WITH GOOGLE
    </button>
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
    <button (click)="signin()">
    SIGN IN WITH GOOGLE
    </button>
    </div>
  </div>
</div>
      @endsection
<script src="https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.6.10/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.6.10/firebase-firestore.js"></script>
<!-- Add other Firebase services if needed -->
<script>

<script>
    function signin() {
        firebase.auth().signInWithPopup(new firebase.auth.GoogleAuthProvider())
            .then(function(result) {
                // Handle successful sign-in
                window.location.href = '/members';
            })
            .catch(function(error) {
                // Handle errors
                console.error("Sign-in error:", error);
            });
    }

    function logout() {
        firebase.auth().signOut()
            .then(function() {
                // Sign-out successful.
                window.location.href = '/login';
            })
            .catch(function(error) {
                // An error happened.
                console.error("Logout error:", error);
            });
    }
</script>

import firebase from 'firebase/app';
import 'firebase/auth';
import 'firebase/firestore';

const firebaseConfig = {
  apiKey: "AIzaSyCg0JB55Sz9AJ7fGaFS-iOHNo6EiyulkMo",
  authDomain: "laravel-c1754.firebaseapp.com",
  projectId: "laravel-c1754",
  storageBucket: "laravel-c1754.appspot.com",
  messagingSenderId: "842358056004",
  appId: "1:842358056004:web:31d57c6b7924630e34c811",
  measurementId: "G-ZWFRB9HPB3"
};
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
</script>