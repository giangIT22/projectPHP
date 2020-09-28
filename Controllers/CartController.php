<?php

class CartController extends BaseController{

    protected $productModel;

    public function __construct(){
        $this->loadModel('CategoryModel');
		$this->loadModel('ProductModel');
		$this->categoryModel = new CategoryModel;
		$this->productModel = new ProductModel;
    }
    public function index(){
        $categoryMenu = $this->categoryModel->getAll();

        $products = $_SESSION['cart'] ?? null;

        return $this->view('frontend.carts.index',[
            'menu'         => $categoryMenu,
            'products'     => $products
		]);
    }

    public function store(){
        $productId = $_GET['id'];

        $product   = $this->productModel->findProductById(['*'], $productId);

        if(empty($_SESSION['cart']) || !array_key_exists($productId, $_SESSION['cart'])){
            $product['qty'] = 1;
            $_SESSION['cart'][$productId] = $product;
        }else{
            $_SESSION['cart'][$productId]['qty'] +=1;
        }
      
        header('location:index.php?controller=cart');
    }

    public function update(){
        foreach($_POST['qty'] as $productId => $qty){
            if($qty <0 || !is_numeric($qty)){
                continue;
            }
            if($qty == 0 ){
                unset($_SESSION['cart'][$productId]);
            }
            else{
                $_SESSION['cart'][$productId]['qty'] = $qty;
            }
        }
        header('location:index.php?controller=cart');
    }

    public function destroy(){
        unset($_SESSION['cart']);
        header('location:index.php?controller=cart');
    }
    public function delete(){
        $productId = $_GET['id'];
        unset($_SESSION['cart'][$productId]);
        header('location:index.php?controller=cart');
    }
}