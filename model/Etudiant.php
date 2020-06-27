<?php

class Etudiant implements IAllocation{
    private $matricule;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $date_de_naissance;
    private $bourse;

    //
  
    public   function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }

    }
   
    public  function hydrate($row){
       $this->matricule=$row['matricule']; 
       $this->nom=$row['nom']; 
       $this->prenom=$row['prenom']; 
       $this->email=$row['email']; 
       $this->telephone=$row['telephone']; 
       $this->date_de_naissance=$row['dateDeNaissanc']; 
       $this->bourse=$row['bourse']; 

    }
    


    /**
     * Get the value of bourse
     */ 
    public function getBourse()
    {
        return $this->bourse;
    }

    /**
     * Set the value of bourse
     *
     * @return  self
     */ 
    public function setBourse($bourse)
    {
        $this->bourse = $bourse;

        return $this;
    }

    /**
     * Get the value of date_de_naissance
     */ 
    public function getDate_de_naissance()
    {
        return $this->date_de_naissance;
    }

    /**
     * Set the value of date_de_naissance
     *
     * @return  self
     */ 
    public function setDate_de_naissance($date_de_naissance)
    {
        $this->date_de_naissance = $date_de_naissance;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
}