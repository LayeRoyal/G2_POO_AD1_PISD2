<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Admin</title>
</head>
<body>
  <div class="container-fluid d-flex bg-primary">
      <nav class="navbar navbar-dark ">
        <img class="navbar-brand rounded-circle ml-2"  src="../public/img/logo.png" alt="logo">
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
                <li id="enrEtudiant" class="list-group-item list-group-item-action p-3 active" >Enregistrer Etudiants</li>
                <li id="listEtudiant" class="list-group-item list-group-item-action p-3" >Liste Etudiant</li>
                <li id="enrChambre" class="list-group-item list-group-item-action p-3" >Enregistrer Chambre</li>
                <li id="listChambre" class="list-group-item list-group-item-action p-3" >Liste Chambre</li>

            </ul>
            </div>
      </div>
      <div class="include bg-light rounded" id="include">
        <form method="post" enctype="multipart/form-data">
        </form>
      </div>
  </div>
  <script src="../public/js/homeScript.js"></script>
</body>
</html>