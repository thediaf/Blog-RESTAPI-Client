<?php
namespace App\Controller;

use App\Model\ArticleModel;

require_once('Model/ArticleModel.php');

class ArticleController 
{
    protected $model;
    protected $curl;

    public function __construct()
    {
        $this->curl = curl_init();
        $this->model = new ArticleModel();
    }

    public function home()
    {
        curl_setopt($this->curl, CURLOPT_URL, "http://localhost:8000/index.php");
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        
        $json = curl_exec($this->curl);
        
        curl_close($this->curl);
        
        $json = json_decode($json);
        $articles = $json->articles;
        $categories = $json->categories;

        require('View/home.php');   
    }

    public function show($id)
    {
        $article = $this->model->getArticle($id);
        $categories = $this->model->getCategories();
        require('View/show.php');
    }

    public function categoryArticles($id)
    {
        // echo "ddklf";
        $articles = $this->model->getArticlesByCategory($id);
        $categories = $this->model->getCategories();
        // var_dump($articles);
        require('View/home.php');
    }

}