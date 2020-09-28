<?php
 
class CategoryController extends BaseController
{

	protected $categoryModel;

	protected $productModel;

	public function __construct()
	{
		$this->loadModel('CategoryModel');
		$this->loadModel('ProductModel');
		$this->categoryModel = new CategoryModel;
		$this->productModel = new ProductModel;
	}

    public function index()
	{
		// $pageTitle = 'Danh sách sản phẩm theo danh mục: Laptop';
		
		// $categories = $this->categoryModel->getAll();

		// return $this->view('frontend.catagories.index', [
		// 	'categories' => $categories,
		// 	'pageTitle'  => $pageTitle,
		// ]);
	}

	public function show()
	{
		$categoryId   = $_GET['id'] ?? null;
		
		$categoryMenu = $this->categoryModel->getAll();

		$products = $this->productModel->getByCategoryId($categoryId);
 
		$category = $this->categoryModel->findCategoryById($select = ['*'],$categoryId);
		return $this->view('frontend.categories.show',[
			'menu'         => $categoryMenu,
			'category'     => $category,
			'products'	   => $products
		]);
	}
}