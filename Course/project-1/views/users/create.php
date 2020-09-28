<?php
  require './views/users/process.php';
  ?>

<div class="card">
                <div class="card-body">
                  <div class="card-title">
                         Thêm mới thành viên
                         <a href="index.php?module=user" style = "float:right;">Quay lại</a>
                  </div>
                  <form class="forms-sample" action="index.php?module=user&action=create" method="post" enctype="multipart/form-data">
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