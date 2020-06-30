<?php

require_once('./config/config.php');
define('ACTIVE','active');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page de Connexion </title>
  <link href="<?=ROOT?>public/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?=ROOT?>public/css/style.css">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="container-fluid d-flex bg-primary">
      <nav class="navbar navbar-dark ">
        <img class="navbar-brand rounded-circle ml-2"  src="<?=ROOT?>public/img/logo.png" alt="logo">
      </nav>
      <h3 class="col-lg-8 col-sm-6 py-4 text-white text-center">Bienvenu sur la plateforme d’allocation de chambre<br>
Pour une meilleure experience universitaire!</h3>
      <a href="" class="my-auto col-2"> <button type="button" class="btn btn-danger font-weight-bold">Deconnexion</button></a>
  </div>
  <div class="container-fluid d-flex pt-2 mid align-items-center">
      <div class="menu bg-light rounded ">
            <h4 class="text-center mt-4 mb-4 text-black ">MENU</h4>
          
            <div class="list-group my-5">
            <ul class="font-weight-bold m-0 p-0">
                <a href="<?=ROOT?>user/enrEtudiant"><li id="enrEtudiant" class="list-group-item list-group-item-action p-3 <?php if($_GET['url']=='user/enrEtudiant') {echo ACTIVE;}?>" >Enregistrer Etudiants</li></a>
                <a href="<?=ROOT?>user/listEtudiant"><li id="listEtudiant" class="list-group-item list-group-item-action p-3 <?php if($_GET['url']=='user/listEtudiant') {echo ACTIVE;}?>" >Liste Etudiant</li></a>
                <a href="<?=ROOT?>user/enrChambre"><li id="enrChambre" class="list-group-item list-group-item-action p-3 <?php if($_GET['url']=='user/enrChambre') {echo ACTIVE;}?>" >Enregistrer Chambre</li></a>
                <a href="<?=ROOT?>user/listChambre"><li id="listChambre" class="list-group-item list-group-item-action p-3 <?php if($_GET['url']=='user/listChambre') {echo ACTIVE;}?>" >Liste Chambre</li></a>

            </ul>
            </div>
      </div>
      <div class="include bg-light rounded" id="include">
        
        <?php echo  $contentData?>
      </div>
  </div>
  <script src="<?=ROOT?>public/js/homeScript.js"></script>
</body>
</html>