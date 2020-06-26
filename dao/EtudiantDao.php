<?php

class EtudiantDao extends Manager{

    public   function __construct(){
        $this->tableName="etudiant";
        $this->className="Etudiant";

    }
    public function  add($obj){
        //$matricule,$nom,$prenom,$email,$telephone,$date,$bourse
    //     $sql="INSERT INTO `$this->tableName` (`matricule`, `nom`, `prenom`,`email`, `telephone`, `dateDeNaissanc`,`bourse`) VALUES ('$matricule','$nom','$prenom','$email','$telephone','$date','$bourse') ";
    //    return $this->executeUpdate($sql)!=0;
    }
    public function update($obj){
        // if($param2==null && $value1==null)
        // {
        //     $sql="UPDATE `$this->tableName` SET `$param1` = '$value' WHERE `$this->tableName`.`numeroChambre` = $matricule;";
        // }
        // else{
        //     $sql="UPDATE `$this->tableName` SET `$param1` = '$value',`$param2` = '$value1' WHERE `$this->tableName`.`numeroChambre` = $matricule;";
        //$matricule,$param1,$value,$param2=null,$value1=null
        // }
        // return $this->executeUpdate($sql)!=0;
    }
    public function getStudent($id){
        $sql="select * from $this->tableName where matricule=$id ";
         return  $this->executeSelect($sql);
    
    }
    
   
   
}