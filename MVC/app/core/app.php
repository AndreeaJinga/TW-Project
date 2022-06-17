<?php

class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        // echo "constructor app";
        $url = $this->parseUrl();
        if($url != null){    
            if (file_exists('../App/controllers/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            }
        }
        //var_dump($url[1]);

        require_once '../App/controllers/' . $this->controller . '.php';

        $this->controller=new $this->controller;

        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method=$url[1];
                unset($url[1]);
            }
        }
        //var_dump($this->$method);
        if($url != null){
            $this->params=array_values($url);
        }
        else{
            $this->params=[];
        }
        call_user_func_array([$this->controller, $this->method], $this->params);
    
        ///print_r($this->params);
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return null;
    }
}