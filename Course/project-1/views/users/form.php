

<div class="form-group row">
                      <label  class="col-sm-2 col-form-label">Họ Và Tên</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?= $user['fullName'] ??  $_POST['fullName']?? ''?>" name="fullName" id="exampleInputUsername2" placeholder="Họ Và Tên">
                        <span class="small text-danger"><?= $errorFullName ?? ' '?></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label  class="col-sm-2 col-form-label">Địa chỉ email</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?= $user['email'] ?? $_POST['email']?? ''?>" name="email" id="exampleInputUsername2" placeholder="Địa chỉ email">
                        <span class="small text-danger"><?= $errorEmail ?? ' '?></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label  class="col-sm-2 col-form-label">Số điện thoại</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?= $user['phone'] ?? $_POST['phone']?? ''?>" name="phone" id="exampleInputUsername2" placeholder="Số điện thoại">
                        <span class="small text-danger"><?= $errorPhone ?? ' '?></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label  class="col-sm-2 col-form-label">Địa chỉ</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?= $user['address'] ?? $_POST['address']?? ''?>" name="address" id="exampleInputUsername2" placeholder="Địa chỉ">
                        <span class="small text-danger"><?= $errorAddress ?? ' '?></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Mật khẩu</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control"  name="password" id="exampleInputUsername2" placeholder="Mật khẩu">
                        <span class="small text-danger"><?= $errorPassword ?? ' '?></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nhập lại mật khẩu</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" name="replacePassword" id="exampleInputUsername2" placeholder="Nhập lại mật khẩu">
                        <span class="small text-danger"><?= $errorReplace ?? ' '?></span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Ảnh đại diện</label>
                     
                      <div class="col-sm-9">
                      <input type="file" name="avatar" class="form-control" />
                      <?php if (!empty($user['avatar'])): ?>
                      <img src='./uploads/users/<?= $user['avatar'] ?>' width="90" />
                      <?php endif; ?>
                      </div>
                    </div>

</div>