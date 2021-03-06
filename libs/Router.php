<?php

class Router
{
    protected $currentController = 'AuthController';
    protected $currentMethod = "connexion";
    protected $params = [];
    public function __construct()
    {
        // autoCHARGEMENT
        spl_autoload_register(function($class){
            $pathModels="./model/".$class.".php";
            $pathDao="./dao/".$class.".php";
            $pathLibs="./libs/".$class.".php";
            if(file_exists($pathModels)){
                require_once( $pathModels);
            }elseif(file_exists($pathDao)){
                require_once($pathDao); 
            }elseif(file_exists( $pathLibs)){
             require_once( $pathLibs); 
         }     
         });


        define('CTRL','./controller/');
        $url = $this->getUrl();
        if (isset($url[0])) {
            if (file_exists(CTRL . ucfirst(strtolower($url[0]) . 'Controller.php'))) {
                // controller existe 
                $this->currentController = ucfirst(strtolower($url[0])) . 'Controller';
                require_once CTRL.$this->currentController . ".php";
                $this->currentController = new $this->currentController();

                //gestion methode
                if (isset($url[1])) {
                    if (method_exists($this->currentController, strtolower($url[1]))) {
                        //methode existe 
                        $this->currentMethod = strtolower($url[1]);
                        //gestion params
                        if (isset($url[2])) {
                            $this->params = $url[2];
                        }
                        
                    } 
                    else {  // methode n'existe pas
                        $this->currentController = 'ErrorController';
                        $this->currentMethod = 'showerror';
                        $this->params = "la methode";
                        require_once CTRL.$this->currentController . ".php";
                        $this->currentController = new $this->currentController();
                    }
                }
                else {  // methode non donné
                    die('Donnez la methode');
                }
                

            }
            else { // controlleur n'existe pas
                $this->currentController = 'ErrorController';
                $this->currentMethod = 'showerror';
                $this->params = "le controlleur";   
                require_once CTRL.$this->currentController . ".php";
                $this->currentController = new $this->currentController();
            }
          
    }
    else{
        // si url n'existe pas
            require_once CTRL.$this->currentController.".php";
            $this->currentController = new $this->currentController();

    }
  
    call_user_func([$this->currentController, $this->currentMethod], $this->params);
    }

    private function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = filter_var($_GET['url'], FILTER_SANITIZE_URL);
            return $url = explode('/', $url);
           
        }
    }
}