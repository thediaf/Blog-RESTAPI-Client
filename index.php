<?php

    require_once('Controller/ArticleController.php');

    $run = new \App\Controller\ArticleController();
    
    try {
        if(isset($_GET['action']))
        {
            if ($_GET['action'] == "show")
            {
                $run->show($_GET['id']);
            }
            elseif ($_GET['action'] == "category")
            {
                
                $run->categoryArticles($_GET['id']);
            }
        }
        else
            $run->home();
    } catch (\Throwable $th) {
        //throw $th;
    }