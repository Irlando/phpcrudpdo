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

    function getOne($id){
        $sqlSelect = $this->query("Select * from $this->table where id = '$id'");
        $resultQuery = $sqlSelect->fetch(PDO::FETCH_ASSOC);
        return $resultQuery;
    }
    function insert($data,  $uploadfile)
    {
        
         $newpass = "";
        try {    
                    
            $uploadfile = str_replace('.', '', $uploadfile);
            if ($data["password"]) {
                $newpass = md5($data["password"]);
            }
            $sqlInsert = "INSERT INTO $this->table (username, password, name, position, photo_perfil) VALUES (:username, :password, :name, :position, :photo_perfil);";
            $resultQuery = $this->prepare($sqlInsert)->execute(['username'=>$data['username'],'password'=>$newpass,'name'=>$data['name'],'position'=>$data['position'],'photo_perfil'=>$uploadfile]);
            return $resultQuery;
            
        } catch (Exception $e) {
               throw new exception('error !' . $e->getMessage());
        }
       
    }
}