<?php 
require_once "./models/User.php";

class UsersController {
    private $model;
    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function index()
    {
        $resultusers = $this->model->getAll();
       // print_r(json_encode($users));
        require_once "./views/users/index.php"; 
          //return index("user", compact("users"));
    }
    
    public function create($data)
    {
        if (!empty($data)) {
            $this->model->insert($data);
          // header('Location: "/phpcrudpdo/index.php"'  );   
        } else {

            require_once "./views/users/create.php";
        }
          //return index("user", compact("users"));
    }
     public function insertdados()
    {
         
        //if(isset($_POST))    
          //  print_r($_POST); 
        //require_once "./views/users/create.php"; 
        return $this->url_redirect('/index.php', false);
   
    }

     function url_redirect($url, $permanent = false)
    {      
        header('Location: ' . $url);       
    }



}