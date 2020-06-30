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
           $this->data['message']= '<h4 class="m-0 p-0 text-danger" >Veuiller remplir tous les champ!</h4>'; 

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

         //update etudiant
        if(isset($_POST['submit'])){
          if($_POST['bourse']=='' || $_POST['nom']=='' || $_POST['prenom']=='' || $_POST['telephone']=='' || $_POST['email']=='')
          {
           $this->data['message']= '<h4 class="m-0 p-0 text-danger" >Veuiller remplir tous les champ!</h4>'; 
          }
          else{
            $this->dao=new EtudiantDao();
            $this->dao->update($_POST);
           
             
            


          }
        }

          //delete etudiant
        if(isset($_POST['delete'])){
          $this->dao=new EtudiantDao();
          $this->dao->delete($_POST['delete']);
        }
        
        
    }
    public function dataEtudiant()
    {
        $this->dao=new DataEtudiantDao();
       $obj=$this->dao->getLotStudent();
       $data=[];
        foreach ($obj as $key => $value) {
         $data[]=['matricule'=>$value->getMatricule(),
         'prenom'=>$value->getPrenom(),
         'nom'=>$value->getNom(),
         'email'=>$value->getEmail(),
         'telephone'=>$value->getTelephone(),
         'bourse'=>$value->getBourse()
        ];
        }
        echo json_encode($data);   
    }
    public function listChambre()
    {
        $this->view="listChambre";
        $this->render();

    }
    public function enrEtudiant()
    {
      if(isset($_POST['enregistrer'])){
        if(empty($_POST['prenom']) || empty($_POST['nom']))
        {
         $this->data['message']= '<h5 class="m-0 p-0 text-danger" >Veuiller remplir tous les champ!</h5>'; 

        }
        else{
          array_pop($_POST);
          $_POST['matricule']='2020yega011';
           $this->dao=new EtudiantDao();
           if($this->dao->add($_POST))
           {
            $this->data['message']= '<h5 class="m-0 p-0 text-success" >Etudiant enregistré avec succes!</h5>'; 
           }
           else{
            $this->data['message']= '<h5 class="m-0 p-0 text-danger" >L\'enregistremet a échoué !</h5>'; 

           }
        }

      }
        $this->view="enrEtudiant";
        $this->render();

    }
   
}