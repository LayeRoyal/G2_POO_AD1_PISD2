<?php

class Controller{
    protected $layout;
    protected $view;
    protected $folder;
    protected $dao;
    protected $validator;

    public function render(){

        $pathView="./view/".$this->folder."/".$this->view.".php";
        $pathLayout="./view/layout/".$this->layout.".php";
          ob_start();
           require_once($pathView);
           $contentData=ob_get_clean();
          require_once($pathLayout);
    }
}
