<?php

namespace App\Controller;
use App\Model\AuthModel;
use App\Controller\UserController;


class AuthController {

    public function index(){

            $view= new UserController();
            $view->index();

    }
    public function logout(){
        session_destroy();
header('location: ?uri=');
    }
    public function register(){
        include_once '../app/view/register.php';
    }
    public function registration() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit']=='regester') {
            $username = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role_id=2;

            $newUser = new AuthModel();
            $newUser->setUsername($username);
            $newUser->setEmail($email);
            $newUser->setPassword($password);
            $newUser->setRoleId($role_id);
$newUser->registerUser();
        } 
    }

    public function loginUser() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit']=='login') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $loginUser = new AuthModel();
         
            $user=$loginUser->loginUser($email , $password);
            if($user){
                $_SESSION['email']= $user->email;
                $_SESSION['username']= $user->username;
                $_SESSION['role_id']=$user->role;
                $_SESSION['user_id']=$user->id;

            $this->index();
           }
        } 
    }

    public function isLoggedIn() {
        return !empty($_SESSION['user_id']) ? true : false;
    }

    public function showLoginOptions() {
        if ($this->isLoggedIn()) {
            include_once(__DIR__ . "/../View/includes/partials/loggedInOps.php");
        } else {
            include_once(__DIR__ . "/../View/includes/partials/loginBtn.php");
        }
    }





}



