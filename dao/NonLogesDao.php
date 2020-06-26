<?php

class NonLogesDao extends Manager {

    public   function __construct(){
        $this->tableName="nonloges";
        $this->className="Nonloges";
    } 

    public function add(ôbj){
    //$matricule,$adresse     $sql="INSERT INTO `$this->tableName` (`matricule`, `adresse`) VALUES ('$matricule', '$adresse') ";
    //    return $this->executeUpdate($sql)!=0;
    }
    public function update($obj){
    
        // $sql="UPDATE `$this->tableName` SET `adresse` = '$adresse' WHERE `$this->tableName`.`matricule` = $matricule;";
    //   $matricule,$adresse
        // return $this->executeUpdate($sql)!=0;
    }
    
    public function findAdressByMatricule($matricule){
        $sql="select `adresse` from $this->tableName where `matricule`='$matricule' ";
        $data=$this->executeSelect($sql);
        if(count($data)==0){
              return null;
        }
        return count($data)==1?$data[0]:$data;
    
    }
}