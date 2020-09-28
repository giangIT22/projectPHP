<?php

class HomeController extends BaseController{
    protected $categoryModel;

    protected $productModel;
    public function __construct(){
        $this->loadModel('CategoryModel');
        $this->loadModel('ProductModel');

        $this->categoryModel = new CategoryModel;
        $this->productModel  = new ProductModel;
    }
    public function index(){
        $params = $_GET;
        $categoryMenu = $this->categoryModel->getAll(); 
        $products = !$params ? $this->productModel->getAll() : $this->productModel->search($params);
        $categoryHome = $this->categoryModel->getCategoryPickHome();
        $this->view('frontend.home.index',[
            'menu'         => $categoryMenu,
            'categoryHome' => $categoryHome,
            'products'     => $products 
        ]);
    }
}