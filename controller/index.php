<?php
//Chargement Static de la classe
/*
require_once("./models/IQuizz.php");
require_once("./models/User.php");
require_once("./models/Admin.php");
require_once("./models/Joueur.php");
require_once("./models/Jeu.php");
*/
//Chargement dynamique  des classes=> AutoLoading
define("BASE_URL","http://localhost/live_poo");
require_once("./libs/Router.php");
$router=new Router();
$router->route();


/*
//instanciation
$jeu=new Jeu([
    "date"=>"12-02-2020"
]);
var_dump($jeu);


$user=new User();
var_dump($user);
$user->setId(1);
echo $user->getId();
$user->setNomComplet("Maimouna Wone");
echo $user->getNomComplet();

$user1=new User([
        "id"=>1,
        "nomComplet"=>"Oumar Anne"
    ]
);
var_dump($user1);


$joueur=new Joueur();
var_dump($joueur);

$admin=new Admin();
$admin->setProfil("Joueur");

var_dump($admin);
*/