<?php

    require_once('Controller/ArticleController.php');
    require_once('Controller/UserController.php');

    $run = new \App\Controller\ArticleController();
    $userController = new \App\Controller\UserController();
    
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
            elseif ($_GET['action'] == "login")
            {
                
                $userController->login();
            }
        }
        else
            $run->home();
    } catch (\Throwable $th) {
        //throw $th;
    }