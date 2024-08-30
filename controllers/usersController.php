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
    }

     public function detalhes($id)
    {
        $resultusers = $this->model->getOne($id);
       // print_r(json_encode($users));
         return print_r(json_encode($resultusers));
    }
    
    public function create($data)
    {
        if (!empty($data)) {
            $uploaddir = './views/uploads/';
            $uploadfile = $uploaddir . basename($_FILES['upfile']['name']);        


            if ($this->model->insert($data,$uploadfile) == 1 ){                   

                    if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile)) {
                        echo "Foto caregado com sucesso.\n";
                    } else {
                        echo "utilizador criado, mas problema com foto!\n";
                    }
            } else {
                echo "erro na criacao do utilizador";
            }
          // header('Location: "/phpcrudpdo/index.php"'  );   
        } else {

            require_once "./views/users/create.php";
        }
          //return index("user", compact("users"));
    }
     public function insertdados()
    {
        return $this->url_redirect('/index.php', false);   
    }

     function url_redirect($url, $permanent = false)
    {      
        header('Location: ' . $url);       
    }
}