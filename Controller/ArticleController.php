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
        session_start();

        $response = $this->request->callAPI("http://localhost:8000/index.php");
        $articles = $response->articles;
        $categories = $response->categories;

        require('View/home.php');  
    }

    public function new()
    {
        session_start();
        if ($_POST) {
           
            $url = 'http://localhost:8000/index.php';
            $data = array(
                        'title' => $_POST['title'], 
                        'content' => $_POST['content'],
                        'category' =>  $_POST['category']
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
            $result = file_get_contents($url, false, $context);
            
            /* Handle error */ 
            $this->home();
            
        }
        else {
            require('View/new.php');
        }
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