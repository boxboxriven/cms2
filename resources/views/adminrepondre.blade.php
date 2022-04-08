<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.neonText {
    color: #fff;
    text-shadow:
      0 0 7px #fff,
      0 0 10px #fff,
      0 0 21px #fff,
      0 0 42px #f09,
      0 0 82px #f09,
      0 0 92px #f09,
      0 0 102px #f09,
      0 0 151px #f09;
  }


/* Additional styling */
  
body {
  font-size: 18px;
  font-family: "Vibur", sans-serif;
  background-color: #010a01;
}  

h1, h2 {
  text-align: center;
  font-weight: 400;
  line-height: 1;
}
  
h1 {
    font-size: 6.2rem;
    animation: pulsate 0.11s ease-in-out infinite alternate;     
}
  
h2 {
    font-size: 1.8rem;
}

.container {
  margin-top: 20vh;
}

@keyframes pulsate {
    
  100% {

      text-shadow:
      0 0 4px #fff,
      0 0 11px #fff,
      0 0 19px #fff,
      0 0 40px #f09,
      0 0 80px #f09,
      0 0 90px #f09,
      0 0 100px #f09,
      0 0 150px #f09;
  
  }
  
  0% {

    text-shadow:
    0 0 4px #fff,
    0 0 10px #fff,
    0 0 18px #fff,
    0 0 38px #f09,
    0 0 73px #f09,
    0 0 80px #f09,
    0 0 94px #f09,
    0 0 140px #f09;

}
}
</style>
<body>
<head>
    <title>Admin</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Vibur:400' rel='stylesheet' type='text/css'>
<div>

    <h3 class="neonText" >Rubrique des réponses  (Vous etes en train de repondre a un commentaire)</h3>
</div>

@csrf
<div>
  <form action="/cms2/public/repondrecommentaire1" method="post">
  @csrf
    <label for="fname">Votre nom et Prenom </label>
    <input type="text" id="fname" name="nomadmin" placeholder="">

    <label for="lname">Votre reponse</label>
    <input type="text" id="lname" name="reponse" placeholder="">
    <input type="number" name="realid" value="<?php echo $_REQUEST['rn'] ?>" hidden> 
    <input type="submit" value="Envoyer la reponse au client">
  </form>
</div>

</body>
</html>


