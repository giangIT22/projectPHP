<?php

class CategoryController extends BaseController{
    use UploadFile;

    protected $categoryModel;

    protected $validateError;

    public function __construct(){

        parent::__construct();
        $this->loadModel('CategoryModel');
        $this->categoryModel = new CategoryModel;
    }
    public function index(){
        $categories = $this->categoryModel->getAll(['*'] , ['id' => 'id', 'desc' => 'desc']);

        return $this->view('backend.categories.index',[
            'categories' => $categories 
        ]);
    }

    public function delete(){
        $id = $_GET['id'] ?? '';
        
        if($id && is_numeric($id)){
            $this->categoryModel->deleteData($id);
            header('location:index.php?module=backend&controller=category');
        }else{
            echo '<h3>Danh mục không đúng</h3>';
        }
       
    }

    public function create(){
        return $this->view('backend.categories.create');
    }


    public function edit(){
        $id = $_GET['id'] ?? null;

        $category = $this->categoryModel->findCategoryById($select = ['*'],$id) ?? [];

        return $this->view('backend.categories.edit',[
            'category' => $category
        ]);
    }

    private function getImage(){
        $image = null;

        if(!empty($_FILES['image']['name'])){
            $this->setFileName($_FILES['image']['name']);
            $this->setFolderUpload('./public/uploads');
            $this->setFileTemp($_FILES['image']['tmp_name']);
            $image = $this->upload();
        }

        return $image;
    }

    public function store(){
        $data = [
            'name'           => $_REQUEST['name'],
            'slug'           => $_REQUEST['slug'],
            'description'    => $_REQUEST['description'],
            'user_id'        => $_SESSION['user']['id'],
            'is_home'        => $_REQUEST['is_home'] ?? 0,
        ];

       if(!$this->validate($_REQUEST)){
            return $this->view('backend.categories.create',[
                'errors'   => $this->validateError,
          
            ]);
       }

        if($this->getImage()){
            $data['image'] = $this->getImage();
        }

       if(isset($_GET['id']) && $_GET['id']){
            $this->categoryModel->updateData($_GET['id'],$data);
       }else{
            $this->categoryModel->createData($data);
       }
      

       header('location:index.php?module=backend&controller=category');
    }

    private function validate(array $input){
        $errors = [];

        //validate for name 
        if(empty($input['name'])){
            $errors['name'] = "vui lòng nhập tên danh mục ";
        }
        else if(strlen(trim($input['name'])) <2 ){
            $errors['name'] = "Tên danh mục không hợp lệ";
        }

        //validate for slug
        if(empty($input['slug'])){
            $errors['slug'] = "vui lòng nhập slug";
        }

        if(empty($input['description'])){
            $errors['description'] = "vui lòng nhập thông tin mô tả";
        }
        //check image format
        if(!empty($_FILES['image']['type'])){
            $type =explode('/',  $_FILES['image']['type']);
            if($type[0] != 'image'){
                $errors['image'] = "vui lòng nhập lại ảnh";
            }
        }
        $this->validateError = $errors;

        return count($errors) ===  0;
    }
}