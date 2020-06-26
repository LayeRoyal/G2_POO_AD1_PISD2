<?php

class Nonloges
 extends Etudiant implements IAllocation{

    private $adresse;

    public   function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }

    }
   
    public  function hydrate($row){
       $this->adresse=$row['adresse']; 
    }
       

 
    public function getAdresse()
    {
        return $this->adresse;
    }

 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
}