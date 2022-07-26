<?php
namespace App\Controller;

use App\Model\ArticleModel;
use App\Model\CategoryModel;
use App\Model\UserModel;
use App\Controller\ArticleController;
use App\Controller\ApiController;

require_once('Model/UserModel.php');
require_once('Model/CategoryModel.php');
require_once('Controller/ArticleController.php');
require_once('Controller/ApiController.php');


class UserController 
{
    protected $model;
    protected $categoryModel;

    public function __construct()
    {
        $this->request = new ApiController();
        $this->model = new UserModel();   
        $this->categoryModel    =   new CategoryModel();
    }

    public function users()
    {
        session_start();

        $response = $this->request->callAPI("http://localhost:8000/index.php?action=users");
        // var_dump($response);
        $users = $response->users;
        $categories = $response->categories;

        require('View/users.php');  
    }

    public function signin()
    {
        if ($_POST) {

           
            $url = 'http://localhost:8000/index.php?action=signin';
            $data = array('login' => $_POST['login'], 'password' => $_POST['password']);
            // utilisez 'http' même si vous envoyez la requête sur https:// ...
            $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
            );
            $context  = stream_context_create($options);
            $token = file_get_contents($url, false, $context);
            $token = json_decode($token);

            if ($token) {
                session_start();
                $_SESSION["loggedIn"] = true;
            }
            
            (new ArticleController())->home();
            
        }
        else {
            require('View/signin.php');
        }
        
    }

    public function signup()
    {
        if ($_POST) {

           
            $url = 'http://localhost:8000/index.php?action=signup';
            $data = array(
                    'login' => $_POST['login'], 
                    'firstname' => $_POST['firstname'], 
                    'lastname' => $_POST['lastname'],
                    'password' => $_POST['password'],
                    'password_retype' => $_POST['password_retype']
                    );
            // utilisez 'http' même si vous envoyez la requête sur https:// ...
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                )
            );
            $context  = stream_context_create($options);
            $token = file_get_contents($url, false, $context);
            $token = json_decode($token);

            if ($token) {
                session_start();
                $_SESSION["loggedIn"] = true;
            }
            
            (new ArticleController())->home();
            
        }
        else {
            require('View/signup.php');
        }
    }

    public function logout()
    {
        session_start(); // demarrage de la session
        session_destroy(); // on détruit la/les session(s), soit si vous utilisez une autre session, utilisez de préférence le unset()
        (new ArticleController())->home();
         die();
    }
}