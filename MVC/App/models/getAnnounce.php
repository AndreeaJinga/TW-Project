<?php
require_once '../../core/controller.php';
class GetAnnounce {

    private $contr;
    private $db;

    public function __construct()
    {
        $this->contr = new Controller;
        $this->db = $this->contr->model2('DataBase');
    }

    public function getAnnounces()
    {
        //var_dump($this->db);
        return $this->db->selectAnnounceTable();
    }
}
?>