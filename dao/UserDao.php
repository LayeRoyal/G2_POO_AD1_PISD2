<?php

class UserDao extends Manager{
   

    public   function __construct(){
        $this->tableName="utilisateur";
        $this->className="User";

    }
    public function add($obj){
        $sql="";
       return $this->executeUpdate($sql)!=0;
    }
    public function update($obj){

    }
    public function findByLoginAndPwd($login,$pwd){
        $sql="select * from $this->tableName where login='$login'  and mdp='$pwd' ";
        $data=$this->executeSelect($sql);
        if(count($data)==0){
              return null;
        }
        return count($data)==1?$data[0]:$data;
    
    }


}