<?php

class DataEtudiantDao extends Manager{
    public   function __construct(){
        $this->tableName="etudiant";
        $this->className="Etudiant";
    } 
    public function  add($obj){}
    public function  update($obj){}
    public function getLotStudent(){
        $limit = $_POST['limit'];
    $offset = $_POST['offset'];
    $sql ="SELECT * FROM  $this->tableName  LIMIT {$limit} OFFSET {$offset} ";
    return  $this->executeSelect($sql);

    }

}
