<?php
namespace App\Controller;

use App\Model\ArticleModel;

require_once('Model/ArticleModel.php');

class ArticleController 
{
    protected $model;
    public function __construct()
    {
        $this->model = new ArticleModel();
    }

    public function home()
    {
        $articles = $this->model->getArticles();
        $categories = $this->model->getCategories();
        // $categories = new CategoryModel();
        // var_dump($categories);
        // echo "test";
        if ($articles) {
            require('View/home.php');   
            # code...
        }
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