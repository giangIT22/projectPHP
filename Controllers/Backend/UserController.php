<?php

class UserController extends BaseController{

    protected $userModel;

    protected $validateErrors;

    public function __construct(){
        parent::__construct();
        $this->loadModel('UserModel');
        $this->userModel = new UserModel;

    }

    public function index(){
        $users = $this->userModel->getAll();

        return $this->view('backend.users.index',[
            'users' => $users
        ]);
    }

    public function create(){
        return $this->view('backend.users.create');
    }

    private function validate(array $input){
        $errors = [];

        //validate for name 
        if(empty($input['fullname'])){
            $errors['fullname'] = "vui lòng nhập họ và tên ";
        }
        else if(strlen(trim($input['fullname'])) <10 ){
            $errors['fullname'] = "Họ và tên không hợp lệ";
        }

        if(empty($input['email'])){
            $errors['email'] = "vui lòng nhập email";
        }else if(!filter_var($input['email'], FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Email không đúng định dạng, vui lòng nhập lại";
        }

        if(empty($input['address'])){
            $errors['address'] = "vui lòng nhập address";
        }

        if(empty($input['phone'])){
            $errors['phone'] = "vui lòng nhập số điện thoại";
        }

        if(empty($input['age'])){
            $errors['age'] = "vui lòng nhập email";
        }else if( $input['age'] < 18){
            $errors['age'] = "Chưa đủ tuổi, vui lòng nhập lại";
        }

        if(empty($input['gender'])){
            $errors['gender'] = "vui lòng nhập giới tính";
        }

        if (!empty($_GET['id'])) {
            if (!empty($input['password']) || !empty($input['repassword'])) {
                $errors = array_merge($errors, $this->validatePassword($input));
            }
        } else {
            $errors = array_merge($errors, $this->validatePassword($input));
        }
        
        $this->validateError = $errors; 

        return count($errors) ===  0;
    }

    private function validatePassword($input)
    {
        $errors = [];

        if (empty($input['password'])) {
                $errors['password'] = 'Vui lòng nhập mật khẩu';
        } else if (strlen($input['password']) < 6) {
            $errors['password'] = 'Mật khẩu không được nhỏ hơn 6 ký tự';
        }

        if (empty($input['repassword'])) {
            $errors['repassword'] = 'Vui lòng xác nhận mật khẩu';
        } else if ($input['repassword'] != $input['password']) {
            $errors['repassword'] = 'Mật khẩu không trùng khớp';
        }

        return $errors;
    }

    public function save(){
        $data = [
            'fullname'        => $_REQUEST['fullname'],
            'email'           => $_REQUEST['email'],
            'phone'           => $_REQUEST['phone'],
            'age'             => $_REQUEST['age'],
            'address'         => $_REQUEST['address'],
            'gender'          => $_REQUEST['gender'] 
        ];

       if(!$this->validate($_REQUEST)){
            return $this->view('backend.users.create',[
                'errors'   => $this->validateError,
            ]);
        }

       if(isset($_GET['id']) && $_GET['id']){
           if(!empty($_REQUEST['password'])){
                $data['password'] = md5($_REQUEST['password']);
           }

            $this->userModel->updateData($_GET['id'],$data);
       }else{
            $data['password'] = md5($_REQUEST['password']);
            $this->userModel->createData($data);
       }
      

       header('location:index.php?module=backend&controller=user');
    }

    public function edit(){
        $id = $_GET['id'] ?? null;
        $user = $this->userModel->findUserById($select = ['*'],$id) ?? [];

        return $this->view('backend.users.create',[
            'user' => $user,
        ]);
    }

    public function delete(){
        $id = $_GET['id'] ?? null;
        $user = $this->userModel->findUserById(['*'],$id);
        if(!$user){
            echo "<h2>Không tìm thấy user</h2>";
            return;
        }

        $this->userModel->deleteData($id);

        if($user['id'] == $_SESSION['user']['id']){
            unset($_SESSION['user']);
        }

        header('location:index.php?module=backend&controller=user');
    }
}