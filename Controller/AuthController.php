<?php

require_once 'Controller.php';
 class AuthController extends Controller {
    
public function loginForm () {
    $this->view('/Authentication/login');
}
public function registerForm () {
    $this->view('/Authentication/register');
}

public function registerData () {
  $role = isset($_GET['r']) ? $_GET['r'] : 'null';
   $authenticate =  $this->model("/Authentication");
    $userRegistration = $authenticate->registerValidation();
       
           $this->view($userRegistration["userPage"], $userRegistration);
}

}

?>  