<div class="main-panel">
	<div class="content-wrapper">
	    <div class="row">
	        <div class="col-md-12 stretch-card">
	        	<form action="index.php?module=backend&controller=user&action=save&id=<?= $_GET['id'] ?? ''?>" style="width: 100%;" method="post" enctype="multipart/form-data">
	            	<div class="card">
				    <div class="card-body">
						<div class="card-title">
							Thông tin thành viên
							<a href="index.php?module=backend&controller=user" class="btn btn-success" style="float: right; margin-left:10px;">Trở lại</a>
							<button type="submit" class="btn btn-success" style="float: right;">Lưu lại</button>
						</div>

				    <div class="card-body">
				    	<div class="form-group row">
						    <label class="col-sm-2 col-form-label">
						        Họ và tên
						    </label>

						    <div class="col-sm-10">
						        <input type="text" name="fullname" class="form-control" value="<?=$_POST['fullname'] ?? $user['fullname'] ?? ''?>">
						        <span class="small text-danger"><?= $errors['fullname'] ?? '' ?></span>
						    </div>
						</div>

						<div class="form-group row">
						    <label class="col-sm-2 col-form-label">
						        Email
						    </label>

						    <div class="col-sm-10">
						        <input type="text" name="email" class="form-control" value="<?=$_POST['email'] ?? $user['email'] ?? ''?>">
						        <span class="small text-danger"><?= $errors['email'] ?? '' ?></span>
						    </div>
						</div>

						<div class="form-group row">
						    <label class="col-sm-2 col-form-label">
						        Mật khẩu
						    </label>

						    <div class="col-sm-10">
						        <input type="password" name="password" class="form-control" >
						        <span class="small text-danger"><?= $errors['password'] ?? '' ?></span>
						    </div>
						</div>

						<div class="form-group row">
						    <label class="col-sm-2 col-form-label">
						      Xác nhận Mật khẩu
						    </label>

						    <div class="col-sm-10">
						        <input type="password" name="repassword" class="form-control" >
						        <span class="small text-danger"><?= $errors['repassword'] ?? '' ?></span>
						    </div>
						</div>

                        <div class="form-group row">
						    <label class="col-sm-2 col-form-label">
						        Số điện thoại
						    </label>

						    <div class="col-sm-10">
						        <input type="text" name="phone" class="form-control" value="<?=$_POST['phone'] ?? $user['phone'] ?? ''?>">
						        <span class="small text-danger"><?= $errors['phone'] ?? '' ?></span>
						    </div>
						</div>

                        <div class="form-group row">
						    <label class="col-sm-2 col-form-label">
						        Độ tuổi
						    </label>

						    <div class="col-sm-10">
						        <input type = "text" class="form-control" name="age" value="<?=$_POST['age'] ?? $user['age'] ?? ''?>" ></input>
								<span class="small text-danger"><?= $errors['age'] ?? '' ?></span>
						    </div>
						</div>
			           	
			           	<div class="form-group row">
						    <label class="col-sm-2 col-form-label">
						        Địa chỉ
						    </label>

						    <div class="col-sm-10">
						        <input type = "text" class="form-control" name="address" value="<?=$_POST['address'] ?? $user['address'] ?? ''?>"></input>
								<span class="small text-danger"><?= $errors['address'] ?? '' ?></span>
						    </div>
						</div>

                        <div class="form-group row">
						    <label class="col-sm-2 col-form-label">
						        Giới tính
						    </label>

						    <div class="col-sm-10">
						       <select name="gender" id="" class="form-control">
                                   <option value="">Chọn giới tính</option>
                                   <option value="1" <?=!empty($user['gender']) && $user['gender'] == 1 ? 'selected' : ''?>>Nam</option>
                                   <option value="2" <?=!empty($user['gender']) && $user['gender'] == 2 ? 'selected' : ''?>>Nữ</option>
                               </select>
						        <span class="small text-danger"><?= $errors['gender'] ?? '' ?></span>
						    </div>
						</div>

			        </form>
				    </div>
					</div>
				</form>
	        </div>
	    </div>
	  </div>
	</div>
</div>
