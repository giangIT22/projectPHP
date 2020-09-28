<?php

class VerifyController extends BaseController{

    protected $userModel;

    public function __construct(){
        $this->loadModel("UserModel");
        $this->userModel = new UserModel;
    }
     
    public function index(){
        $errors = [];
        $input = $_REQUEST;

        if(isset($_POST['btn-login'])){
            if(empty($input['email'])){
                $errors['email']    = "vui lòng nhập email";
            }
    
            if(empty($input['password'])){
                $errors['password'] = "vui lòng nhập mật khẩu";
            }
        }

        if(!empty($input['email']) && !empty($input['password'])){
            if($user = $this->checkUser($input['email'], $input['password'])){
                $_SESSION['user'] = $user;
                header('location:index.php?module=backend&controller=dashboar');
            }else{
                $errors['all'] = 'Sai email hoặc password';
            }
            
        }
        $this->view('backend.verifies.login',[
            'errors' => $errors
        ]);
    }

    public function logout(){
        if(!empty($_SESSION['user'])){
            unset($_SESSION['user']);
        }
        header('location:index.php?module=backend&controller=verify');
        
    }

    private function checkUser($email, $password){
        return $this->userModel->exists($email, $password);
    }
}