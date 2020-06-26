<?php

class LogesDao extends Manager {

    public   function __construct(){
        $this->tableName="loges";
        $this->className="Loges";
    } 

    public function add($obj){
    // $matricule,$numChambre    $sql="INSERT INTO `$this->tableName` (`matricule`, `numeroChambre`) VALUES ('$matricule', '$numChambre') ";
    //    return $this->executeUpdate($sql)!=0;
    }
    public function update(){
    
        // $sql="UPDATE `$this->tableName` SET `numeroChambre` = '$numChambre' WHERE `$this->tableName`.`matricule` = $matricule;";
    //   $matricule,$numChambre
        // return $this->executeUpdate($sql)!=0;
    }
    public function findNumChambreByMatricule($matricule){
        $sql="select `numeroChambre` from $this->tableName where `matricule`='$matricule' ";
        $data=$this->executeSelect($sql);
        if(count($data)==0){
              return null;
        }
        return count($data)==1?$data[0]:$data;
    
    }
    
}