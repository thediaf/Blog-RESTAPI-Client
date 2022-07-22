<?php
namespace App\Controller;

use App\Model\ArticleModel;

require_once('Model/ArticleModel.php');


class UserController 
{
    protected $model;

    public function __construct()
    {
        $this->model = new ArticleModel();   
    }

    public function login()
    {
        $categories = $this->model->getCategories();
        require('View/connexion.php'); 
    }

    public function signup()
    {
        $categories = $this->model->getCategories();
        require('View/signup.php'); 
    }
}