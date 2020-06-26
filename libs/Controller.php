<?php

class Controller{
    protected $layout;
    protected $view;
    protected $folder;
    protected $dao;
    protected $data;
    protected $validator;

    public function render(){

        $pathView="./view/".$this->folder."/".$this->view.".php";
        $pathLayout="./view/layout/".$this->layout.".php";
          ob_start();
          if($this->data!=''){
            extract($this->data);
          }
           require_once($pathView);
           $contentData=ob_get_clean();
          require_once($pathLayout);
    }
}
