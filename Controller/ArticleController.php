<?php
namespace App\Controller;

use App\Model\ArticleModel;
use App\Controller\ApiController;

require_once('Model/ArticleModel.php');
require_once('Controller/ApiController.php');

class ArticleController 
{
    protected $model;
    protected $request;

    public function __construct()
    {
        $this->request = new ApiController();
        $this->model = new ArticleModel();
    }

    public function home()
    {
        
        $response = $this->request->callAPI("http://localhost:8000/index.php");
        $articles = $response->articles;
        $categories = $response->categories;

        require('View/home.php');   
    }

    public function show($id)
    {
        $url = "http://localhost:8000/index.php?action=show&id=" . $id;
        $response = $this->request->callAPI($url);
        
        $article = $response->article;
        $categories = $response->categories;
        
        require('View/show.php');
    }

    public function categoryArticles($id)
    {
        $url = "http://localhost:8000/index.php?action=category&id=" . $id;
        $response = $this->request->callAPI($url);
        
        $articles = $response->articles;
        $categories = $response->categories;
        
        require('View/home.php');
    }

}