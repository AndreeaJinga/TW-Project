<?php
//require_once "../models/DataBase.php";
class Controller{
    public function model($model){
        require_once "../models/" . $model . ".php";
        return new $model;
    }

    public function view($view, $data = [])
    {
        require_once '../App/views/' . $view . '.php';
    }
}