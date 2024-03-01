@extends('master')
@section('content')
<div class="container custom-login">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">

    <form id="social-login-form" action="login" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" id="social-login-tokenId" name="tokenId" value="">
      <div class="form-group">
        <label style="font-family: Calibri; font-size: 25px;" for="exampleInputEmail1">Adresse email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Indiquer votre adresse email ici" required>
      </div>
    </div>
  </div>

</div>
<<<<<<< HEAD
=======

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
<<<<<<< HEAD
  var googleCallbackLink = '/cms2/public/about';
=======
  var googleCallbackLink = '/cms2/public';
>>>>>>> b5920f8961b24fee4dafcdc2d532409dce79813a

  async function socialSignin(provider) {
    try {
      var result = await firebase.auth().signInWithPopup(googleProvider);
      var token = await result.user.getIdToken();
      document.getElementById('social-login-tokenId').value = token;
      document.getElementById('exampleInputEmail1').value = result.user.email;
      document.getElementById('social-login-form').submit();
    } catch (error) {
      console.log(error);
    }
  }
</script>

>>>>>>> f7affe67204c4e5f15d5677a0fc742cb9a2e5b16
@endsection
