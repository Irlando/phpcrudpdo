<?php 
require_once "./config/connection.php";

class UserModel extends Connect {
    private $table;
    //  private $connection;
    public function __construct()
    {
        parent::__construct();
        $this->table =  "user";
        //$this->connection = new Connect();
    }

    function getAll()
    {
        $sqlSelect = $this->query("Select * From $this->table"); 

        return $sqlSelect->fetchAll(PDO::FETCH_ASSOC);
        //$this->table->from($this->table);
    }
}