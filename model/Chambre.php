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
    

}