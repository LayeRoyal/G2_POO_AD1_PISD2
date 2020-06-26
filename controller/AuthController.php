<?php

class AuthController extends Controller
{
    public function __construct()
    {        
      $this->folder="page";
      $this->layout="default";
    }
    public function connexion()
    {
        $this->view="connexionForm";
        $this->render();

    }
   
}