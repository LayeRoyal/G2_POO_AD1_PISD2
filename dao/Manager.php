<?php
abstract class Manager implements IDAO{
    //Connexion est Fermée
    private $pdo=null;
    protected $tableName;
    protected $className;

  private function getConnexion(){
      //Connexion est fermée
      if($this->pdo==null){
          try{
            $this->pdo = new PDO("mysql:host=localhost;dbname=chambre","root","");
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
          }catch(PDOException $ex){
             die("Erreur de Connexion");
          }
        
      }
      
  }

 private function closeConnexion(){
      
    if($this->pdo!=null){
      $this->pdo=null;
    }
  }

  public function executeUpdate($sql){
          $this->getConnexion();
           $nbreLigne= $this->pdo->exec($sql);
          $this->closeConnexion();
          return $nbreLigne;
   }

  public function executeSelect($sql){
      
    $this->getConnexion();
    //Traitement 
      $result=$this->pdo->query($sql);
        $data=[];  
        foreach( $result as $rowBD){
          //ORM=> tuple BD transformer en Objet
          $data[]=new $this->className($rowBD); //new User($rowBD)  
        }
        $this->closeConnexion();
        return $data;
     
  }

  public function getAll(){
    $sql="select * from $this->tableName";
    return $this->executeSelect($sql);
  }
public function getSingle($id){
    $sql="select * from $this->tableName where id=$id ";
    $data=$this->executeSelect($sql);
    return count($data)==1?$data[0]:$data;

}

public function delete($id){
    $sql="DELETE from `$this->tableName` where `$this->tableName`.`matricule`='$id'";
    return $this->executeUpdate($sql)!=0;
}





    //Connexion
    //FermerConnexion
    //Executer une requete et Retourner un Résultat
       //Execution Requete MaJ(Insert,Update,delete)
       //Execution requete Select

    
}