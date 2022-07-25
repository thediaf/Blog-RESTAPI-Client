<?php
namespace App\Controller;

use App\Model\ArticleModel;
use App\Model\CategoryModel;
use App\Model\UserModel;

require_once('Model/UserModel.php');
require_once('Model/CategoryModel.php');
require_once('Controller/ArticleController.php');


class UserController 
{
    protected $model;
    protected $categoryModel;

    public function __construct()
    {
        $this->model = new UserModel();   
        $this->categoryModel    =   new CategoryModel();
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
        $categories = $this->categoryModel->getCategories();
        require('View/signup.php'); 
    }
}