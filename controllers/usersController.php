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
}