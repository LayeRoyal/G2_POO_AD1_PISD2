<?php

class Batiment implements IAllocation{

    private $numeroBatiment;

    public   function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }

    }
   
    public  function hydrate($row){
       $this->numeroBatiment=$row['numeroBatiment']; 
    }
}