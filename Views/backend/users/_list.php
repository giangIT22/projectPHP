<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                                <div class="card-title">
                                        Danh sách thành viên
                                        <a href="index.php?module=backend&controller=user&action=create" style = "float:right;">Thêm mới</a>
                                </div>
                                <table id="recent-purchases-listing" class="table dataTable no-footer" role="grid">
                                    <thead>
                                        <tr>
                                            <th>Họ và tên</th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                            <th>Giới tính</th>
                                            <th>Địa chỉ</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($users)) :?>
                                            <?php foreach($users as $user): ?>
                                                <tr>                                                            
                                                    <td><?=$user['fullname']?></td>
                                                    <td><?=$user['email']?></td>
                                                    <td><?=$user['phone']?></td>
                                                    <td><?=$user['gender'] == 1 ? 'Nam' : 'Nữ'; ?></td>
                                                    <td><?=$user['address']?></td>
                                                    <td>
                                                        <a href="index.php?module=backend&controller=user&action=edit&id=<?=$user['id']?>">Sửa |</a>
                                                        <a href="index.php?module=backend&controller=user&action=delete&id=<?=$user['id']?>" onclick="return confirm('Bạn có muốn xóa ?')">Xóa</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else :?>
                                            <h2>Không có thành viên nào</h2>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                        </div>
                </div>
              </div>  
        </div>
    </div>
</div>