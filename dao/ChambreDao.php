<?php

class ChambreDao extends Manager {

    public   function __construct(){
        $this->tableName="chambre";
        $this->className="Chambre";
    } 

    public function add($obj){
    // $numBatiment,$type    $sql="INSERT INTO `$this->tableName` (`numeroChambre`, `numeroBatiment`, `type`) VALUES (NULL, '$numBatiment', '$type') ";
    //    return $this->executeUpdate($sql)!=0;
    }
    public function update($obj){
        // if($type==null && $value1==null)
        // {
        //     $sql="UPDATE `$this->tableName` SET `$param` = '$value' WHERE `$this->tableName`.`numeroChambre` = $target;";
        // }
        // else{
        //     $sql="UPDATE `$this->tableName` SET `$param` = '$value',`$type` = '$value1' WHERE `$this->tableName`.`numeroChambre` = $target;";
// $target,$param,$value,$type=null,$value1=null
        // }
        // return $this->executeUpdate($sql)!=0;
    }
    
    public function findByIdChambre($numero){
        $sql="select * from $this->tableName where numeroChambre='$numero' ";
        $data=$this->executeSelect($sql);
        if(count($data)==0){
              return null;
        }
        return count($data)==1?$data[0]:$data;
    
    }
}