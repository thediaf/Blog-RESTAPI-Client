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
        curl_setopt($this->curl, CURLOPT_URL, "http://localhost:8000/index.php?action=show&id=" . $id);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        
        $json = curl_exec($this->curl);
        
        curl_close($this->curl);
        
        $json = json_decode($json);
        $article = $json->article;
        $categories = $json->categories;
        // var_dump($article);
        require('View/show.php');
    }

    public function categoryArticles($id)
    {
        curl_setopt($this->curl, CURLOPT_URL, "http://localhost:8000/index.php?action=category&id=" . $id);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        
        $json = curl_exec($this->curl);
        
        curl_close($this->curl);
        
        $json = json_decode($json);
        $articles = $json->articles;
        $categories = $json->categories;
        require('View/home.php');
    }

}