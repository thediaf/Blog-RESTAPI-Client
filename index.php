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
            elseif ($_GET['action'] == "users")
            {
                
                $userController->users();
            }
            elseif ($_GET['action'] == "new")
            {
                $run->new();
            }
            elseif ($_GET['action'] == "login")
            {
                
                $userController->signin();
            }
            elseif ($_GET['action'] == "signup")
            {
                
                $userController->signup();
            }
            elseif ($_GET['action'] == "logout")
            {
                
                $userController->logout();
            }
        }
        else
            $run->home();
    } catch (\Throwable $th) {
        //throw $th;
    }