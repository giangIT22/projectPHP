<?php
    if(isset($_POST['btn-save'])){
        $fullName = $_POST['fullName'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $address = $_POST['address'] ?? '';
        $password = $_POST['password'] ?? '';
        $replacePassword = $_POST['replacePassword'] ?? '';
        if(!$fullName){
            $errorFullName = "vui lòng nhập họ tên";
        }
        else if(strlen(trim($fullName))<2){
            $errorFullName = "Họ và tên quá ngắn, phải lớn hơn 2 kí tự";
        }
        if(!$email){
            $errorEmail = "Vui lòng nhập email";
        }
        if(!$phone){
            $errorPhone = "Vui lòng nhập số điện thoại";
        }
        if(!$address){
            $errorAddress = "Vui lòng nhập địa chỉ";
        }
        if(!$password && !isset($_GET['id'])){
            $errorPassword = "Vui lòng nhập password";
        }
        // else if(strlen(trim($password))<8 && !isset($_GET['id'])){
        //     $errorPassword = " Mật khẩu quá ngắn, tối thiểu là 8 kí tự";
        // }
        // else if($password && !$replacePassword){
        //     $errorReplace = "vui lòng nhập lại mật khẩu";
        // }
        // else if($replacePassword!=$password){
        //     $errorReplace = "mật khẩu không chính xác, vui lòng nhập lại !";
        // }
        if(!$email){
            $errorEmail = "Vui lòng nhập email";
        }
        if($fullName && $address && $phone  &&$email ){

            $connect = mysqli_connect('localhost', 'root', '', 'phpclass10');
            mysqli_set_charset($connect, "utf8");

            $student = [
                'fullName' =>$fullName,
                'email'    =>$email,
                'phone'    =>$phone,
                'address'  =>$address,
                'password' =>$password,
            ];

            if (!empty($_FILES['avatar']['name'])) {
                $ext      = explode('.', $_FILES['avatar']['name'])[1];
                $fileName = time() . "." . $ext;
                move_uploaded_file($_FILES['avatar']['tmp_name'], "./uploads/users/{$fileName}");
                $avatar = $fileName;
            }
    

           
            if(isset($_GET['id'])){
                if(!isset($student['avatar'])){
                    $student['avatar'] =  null;
                }
                $sql = "UPDATE users SET email='". $email ."', fullName='" . $fullName . "', phone='". $phone ."', address='". $address ."' WHERE id='". $_GET['id'] ."'";
			    mysqli_query($connect, $sql);
            }else{
                $sql = 'INSERT INTO users(fullName,email,phone,address,password,avatar) values("'.$fullName.'", "'.$email.'", "' . $phone . '", "'. $address .'", "'. md5($password).'", "'.$avatar.'")';
                
			    mysqli_query($connect, $sql);			
            }
            header('location:index.php?module=user');
        }
    }