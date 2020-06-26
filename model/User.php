<?php
class User implements IAllocation{
    private $login;
    private $mdp;
    private $id;

    //
  
    public   function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }

    }
   
    public  function hydrate($row){
       $this->id=$row['id']; 
       $this->login=$row['login']; 
       $this->mdp=$row['mdp']; 
    }
    

}