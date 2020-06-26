<?php

class UserController extends Controller
{
    public function __construct()
    {        
      $this->folder="page";
      $this->layout="accueil";
    }
    public function enrChambre()
    {
        $this->view="enrChambre";
        $this->render();
    }
    public function listEtudiant()
    {
        $this->view="listEtudiant";
        $this->render();

    }
    public function listChambre()
    {
        $this->view="listChambre";
        $this->render();

    }
    public function enrEtudiant()
    {
        $this->view="enrEtudiant";
        $this->render();

    }
   
}