<?php
//require_once "../models/DataBase.php";
class Controller{
    public function model($model){
        require_once "../models/" . $model . ".php";
        echo "aici";
        //var_dump($model);
        $test= new DataBase;
        echo "asasd";
        //var_dump($test);
        return new $model;
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}