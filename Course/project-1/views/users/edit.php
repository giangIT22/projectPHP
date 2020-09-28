<?php
	if (!empty($_GET['id'])) {
		$connect = mysqli_connect('localhost', 'root', '', 'phpclass10');
		mysqli_set_charset($connect, "utf8");

		if (mysqli_connect_errno() === 0) {
			$sql  = 'SELECT * FROM users WHERE id ="' . $_GET['id'] . '"';
			$query = mysqli_query($connect, $sql);
			$user = mysqli_fetch_assoc($query);
		}
  }
  require './views/users/process.php';
?>
<div class="card">
                <div class="card-body">
                  <div class="card-title">
                        Cập nhật thành viên
                         <a href="index.php?module=user" style = "float:right;">Quay lại</a>
                  </div>
                  <form class="forms-sample" action="index.php?module=user&action=edit&id=<?= $_GET['id'] ?? ''?>" method="post" enctype="multipart/form-data">
                       <?php
                            require_once './views/users/form.php';
                       ?>
                       <div class="form-check form-check-flat form-check-primary text-center">
                        <button type="submit" name="btn-save" class="btn btn-primary mr-2">Lưu lại</button>
                        <a href="index.php?module=user" class="btn btn-light">Hủy bỏ</a>  
                      </div>
                  </form>
                </<div>
                    
</div>