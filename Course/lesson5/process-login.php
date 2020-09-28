<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (!$username || !$password) {
        $_SESSION['errors']['blank'] = 'Vui lòng nhập username & password';

        unset($_SESSION['errors']['wrong']);
        header('location:form-user.php');

    } else if (strlen($password) < 8) {
        $_SESSION['errors']['min'] = 'Mật khẩu không được nhỏ hơn 8 ký tự';

        unset($_SESSION['errors']['wrong']);
        unset($_SESSION['errors']['blank']);
        header('location:form-user.php');

    } else if ($username != 'admin' || $password != 12345678) {
        $_SESSION['errors']['wrong'] = 'Sai tên đăng nhập hoặc mật khẩu';

        unset($_SESSION['errors']['blank']);
        header('location:form-user.php');
    } else {
        unset($_SESSION['errors']);

        $_SESSION['user'] = [
            'name' => 'Administrator',
            'email' => 'admin@gmail.com'
        ];

        header('location:admin.php');
    }
    

    
