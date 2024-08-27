<?php 
require_once dirname(__FILE__) ."/controllers/usersController.php";

$controller = new UsersController();

$controller->index();
