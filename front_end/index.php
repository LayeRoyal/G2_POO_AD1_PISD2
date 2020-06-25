<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page de Connexion </title>
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="public/css/style.css">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="asset/js/jquery-3.5.1.min.js"></script>
</head>
<body>
  <script>
    
  </script>
  <div class="conteneur">
    <div id="entete_login">
        <img src="public/img/logo.png" alt="logo">
        <p>Bienvenue sur le site d’allocation de chambre<br>Pour une meilleure experience universitaire</p>
    </div>
    <div class="formulaire_connexion">
        <form action="index.php" method="POST">
          <h1 class="seConnecter">LOGIN FORM</span></h1>
          <label for="login" class="label_connexion">Login</label>
          <input id="login" type="texte" name="login" class="inputLogin" value="">
          <div id="tooltipLogin">Le login entré est Incorrect</div>
          <label for="password" class="label_connexion">Password</label>
          <input id="password" type="password" name="password" class="inputPassword">
          <div id="tooltipPassword">Le password entré est Incorrect</div>
          <div>
            <input id="btnConnexion" name="btnConnexion" type="Submit" value="Connexion">
          </div>
        </form>
    </div>
  </div>
  <script src="public/js/script.js"></script>
</body>
</html>