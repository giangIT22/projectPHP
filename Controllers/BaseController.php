<?php

class BaseController
{
    const VIEW_FOLDER_NAME = "Views";

    const MODEL_FOLDER_NAME = "Models";

    // mô tả path : 
    // +path name:  foldername.filename
    //+ lấy từ sau thư mục view

    public function __construct(){
        if(!empty($_GET['module']) && $_GET['module'] == 'backend' && empty($_SESSION['user'])){
            header('location:index.php?module=backend&controller=verify');
        }
    }

    protected function view($path, array $data = []){
        foreach($data as $key=> $value){
            $$key = $value;
        }
       //những cái gì được khai báo trước khi require thì sẽ lấy ra đc giá trị ở trong phần view
       //đây là cách truyền dữ liệu từ trong conttoller ra ngoài view
       return require (self::VIEW_FOLDER_NAME . '/'.str_replace('.', '/', $path). '.php');
    }

    protected function loadModel($modelPath){
        return require (self::MODEL_FOLDER_NAME . '/'. $modelPath. '.php');
    }

    protected function redirect($url){
        header("location : ${url}");
    }
}