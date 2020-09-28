<?php

class ProductController extends BaseController
{
	private $productModel;

	public function __construct()
	{
		$this->loadModel('ProductModel');
		$this->loadModel('ProductImageModel');
		$this->productModel = new ProductModel;
		$this->productImageModel = new ProductImageModel;
	}

	public function index()
	{
		$select = [
			'id', 
			'name', 
			'category_id'
		];
		$order = [
			'column' =>'id',
			 'order' => 'desc'
		]; 
		$products = $this->productModel->getAll(
			$select,$order
		);

		return $this->view('frontend.products.index', [
			'pageTitle' => 'Trang danh sách sản phẩm abcd',
			'products'  => $products,
		]);
	}

	public function store(){
		$data = [
			'name' 			=> 'iphone 12',
			'price'			=> '2500000',
			'image' 		=> null,
			'category_id' 	=> 2
		];

		$this->productModel->store($data);

		echo 'Thêm thành công';
		
	}

	public function show()
	{
		$productId = $_GET['id'] ?? null;

		$product = $this->productModel->findProductById(['*'], $productId);

		$products = $this->productModel->getByCategoryId($product['category_id'], $productId);

		$images = $this->productImageModel->getByProductId($productId);
		return $this->view('frontend.products.show',[
			'product' => $product,
			'products'=> $products,
			'images'  => $images
		]);
	}

	public function delete(){
		$id = $_GET['id'];

		$this->productModel->deleteData($id);

		echo 'Xóa thành công';
	}

	public function update(){
		$data = [
			'name' 			=> 'iphone 11 promax',
			'price'			=> '2500000',
			'image' 		=> null,
			'category_id' 	=> 2
		];

		$id = $_GET['id'];

		$this->productModel->updateData($id, $data);
	}
}