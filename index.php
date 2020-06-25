<?php
spl_autoload_register(function ($class) {
    $pathModels = "./models/" . $class . ".php";
    $pathLibs = "./libs/" . $class . ".php";
    if (file_exists($pathModels)) {
        require_once($pathModels);
    } elseif (file_exists($pathLibs)) {
        require_once($pathLibs);
    }
});
require './config/config.php';
require('./libs/Router.php');

$route = new Router();