<?php
    if(!isset($_SESSION['user_login'])){
        header('location:login.php');
    }
    $moduleName = $_GET['module'] ??'dashboard';
    $actionName = $_GET['action'] ??'';
    switch($moduleName){
        case 'user':
            if(!$actionName)
                require_once './views/users/index.php';
            else    
                require_once "./views/users/${actionName}.php";
            break;
        case 'catagory':
            require_once './views/catagories/index.php';
            break; 
        case 'product':
            require_once './views/products/index.php';
            break;
        case 'news':
            require_once './views/news/index.php';
            break;
        default:
            require_once './views/users/index.php';
            break;
    }