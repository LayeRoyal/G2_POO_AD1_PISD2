<?php

class Chambre implements IAllocation{
    private $numeroChambre;
    private $numeroBatiment;
    private $type;


  
    public   function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }

    }
   
    public  function hydrate($row){
       $this->numeroChambre=$row['numeroChambre']; 
       $this->numeroBatiment=$row['numeroBatiment']; 
       $this->type=$row['type']; 
    }
    


    public function getNumeroChambre()
    {
        return $this->numeroChambre;
    }

    
    public function setNumeroChambre($numeroChambre)
    {
        $this->numeroChambre = $numeroChambre;

        return $this;
    }

    
    public function getNumeroBatiment()
    {
        return $this->numeroBatiment;
    }

   
    public function setNumeroBatiment($numeroBatiment)
    {
        $this->numeroBatiment = $numeroBatiment;

        return $this;
    }

    
    public function getType()
    {
        return $this->type;
    }

     
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}