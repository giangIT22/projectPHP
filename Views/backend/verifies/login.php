
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./public/backend/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./public/backend/assets/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./public/backend/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./public/backend/assets/images/favicon.png" />
</head>

<body>

    <?php
  //==============login======================
        // if(isset($_POST['btn-login'])){
        //     if($_POST['email'] && $_POST['password']){
        //         $email = $_POST['email'];
        //         $password = $_POST['password'];
                
        //         $connect = mysqli_connect('localhost', 'root', '', 'phpclass10');
        //         mysqli_set_charset($connect, "utf8");
        //         if(mysqli_connect_errno() ===0 ){
        //           $sql  = 'SELECT id, fullName, email, phone FROM users WHERE email = "' . $email . '" AND password = "' .md5($password) . '"';
               
        //           $query = mysqli_query($connect, $sql);
        //           if(mysqli_num_rows($query) >0){
        //             $user  = mysqli_fetch_object($query);
        //             $_SESSION['user_login'] = $user;
        //             header('location:index.php');
        //           }else{
        //             $errorMessage = "<li>Sai tên đăng nhập và mật khẩu</li>";
        //           }
        //         }
                  
        //     }else{
        //       $errorMessage = "<li>Vui lòng nhập  thông tin</li>";
        //     }
        // }
    ?>
    <!-- ========================== -->
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
              <form class="pt-3" action="" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Email" name="email" value="<?= $_POST['email'] ?? ''?>">
                  </div>
                  <smail class="error"><?= $errors['email'] ?? ''?></smail>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password" name="password">                        
                  </div>
                  <smail class="error"><?=$errors['password'] ?? ''?></smail>
                </div>
                <smail class="error"><?= $errors['all'] ?? ''?></smail>
                <div class="my-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="btn-login">LOGIN</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="./public/backend/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="./public/backend/js/off-canvas.js"></script>
  <script src="./public/backend/js/hoverable-collapse.js"></script>
  <script src="./public/backend/js/template.js"></script>
  <!-- endinject -->
</body>

</html>
