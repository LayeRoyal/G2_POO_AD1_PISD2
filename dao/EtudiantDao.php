<?php

class EtudiantDao extends Manager{

    public   function __construct(){
        $this->tableName="etudiant";
        $this->className="Etudiant";

    }
    public function  add($obj){
        extract($obj);
        $sql="INSERT INTO `$this->tableName` (`matricule`, `nom`, `prenom`,`email`, `telephone`, `dateDeNaissanc`,`bourse`) VALUES ('$matricule','$nom','$prenom','$email','$telephone','$dateDeNaissanc','$bourse') ";
       return $this->executeUpdate($sql)!=0;
    }
    public function update($obj){
        extract($obj);
   $sql="UPDATE `$this->tableName` SET `$this->tableName`.`prenom` = '$prenom', `$this->tableName`.`nom` = '$nom', `$this->tableName`.`email` = '$email', `$this->tableName`.`telephone` = '$telephone', `$this->tableName`.`bourse` = '$bourse' WHERE `$this->tableName`.`matricule` = '$submit';";

    return $this->executeUpdate($sql)!=0;
    }
 
    public function getStudent($id){
        $sql="select * from $this->tableName where matricule=$id ";
         return  $this->executeSelect($sql);
    
    }
    
   
   
}