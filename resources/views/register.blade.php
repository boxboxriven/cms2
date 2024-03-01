@extends('master')
@section("content")
<head>
</head>
<body>
<form action="register" method="post" id="social-login-form">
  @csrf
  <div class="container">
    <h1 style = "font-family:Calibri;font-size:45px;" >S'enregistrer</h1>
    <label style = "font-family:Calibri;font-size:25px;" for="email"><b>Votre Nom</b></label>
    <input style = "font-family:Calibri;font-size:20px;" type="text" placeholder="Entrer Votre Nom" name="name" id="email" required>

    <label style = "font-family:Calibri;font-size:25px;" for="psw"><b>Votre Email</b></label>
    <input style = "font-family:Calibri;font-size:20px;" type="text" placeholder="Enter Votre email" name="email" id="psw" required>

    <label style = "font-family:Calibri;font-size:25px;" for="psw-repeat"><b>Mot De passse</b></label>
    <input style = "font-family:Calibri;font-size:20px;" type="password" placeholder="Enter un mot de passe" name="password" id="psw-repeat" required>
    <input type="hidden" id="social-login-tokenId" name="token">

    <hr>
    <button style = "font-family:Calibri;font-size:25px;" type="submit" class="registerbtn">Créer Votre Compte</button>
  </div>

  <div class="container signin">
    <p style = "font-family:Calibri;font-size:25px;" >Vous Avez Deja un Compte? <a style = "font-family:Calibri;font-size:25px;" href="/cms2/public/login">S'identifier maintenant</a>.</p>
  </div>
</form>
</body>

<style>
/* Add padding to containers */


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

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
  var googleCallbackLink = '/cms2/public/register';

  async function socialSignin(provider) {
    try {
      var result = await firebase.auth().signInWithPopup(googleProvider);
      var token = await result.user.getIdToken();
      document.getElementById('social-login-tokenId').value = token;
      document.getElementById('social-login-form').action = googleCallbackLink;
      document.getElementById('social-login-form').submit();
    } catch (error) {
      console.log(error);
    }
  }
</script>

@endsection