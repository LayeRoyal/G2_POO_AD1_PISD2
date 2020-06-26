<?php

require_once('./config/config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page de Connexion </title>
  <link href="<?=ROOT?>public/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?=ROOT?>public/css/style.css">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="asset/js/jquery-3.5.1.min.js"></script>
</head>
<body>
  <div class="conteneur">
    <div id="entete_login">
        <img src="<?=ROOT?>public/img/logo.png" alt="logo">
        <p>Bienvenue sur le site d’allocation de chambre<br>Pour une meilleure experience universitaire</p>
    </div>
    <?php echo  $contentData?>
  </div>
  <script src="public/js/script.js"></script>
</body>
</html>