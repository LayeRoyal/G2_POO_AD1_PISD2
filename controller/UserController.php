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
       
        if(isset($_POST['Enregistrer'])){
          if($_POST['type']=='choix' || $_POST['numeroBatiment']=='choix')
          {
           $this->data['message']= '<h4 class="m-0 p-0" text-danger>Veuiller remplir tous les champ!</h4>'; 

          }
          else{
            array_pop($_POST);
             $this->dao=new ChambreDao();
             if($this->dao->add($_POST))
             {
              $this->data['message']= '<h4 class="m-0 p-0 text-success" >Chambre enregistrée avec succes!</h4>'; 
             }
             else{
              $this->data['message']= '<h4 class="m-0 p-0" text-danger>L\'enregistremet a échoué !</h4>'; 

             }
          }

        }
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