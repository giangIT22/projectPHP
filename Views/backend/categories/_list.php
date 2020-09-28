<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                                <div class="card-title">
                                        Danh sách danh mục sản phẩm
                                        <a href="index.php?module=backend&controller=category&action=create" style = "float:right;">Thêm mới</a>
                                </div>
                                <table id="recent-purchases-listing" class="table dataTable no-footer" role="grid">
                                    <thead>
                                        <tr>
                                            <th>Ảnh đại diện</th>
                                            <th>Tên danh mục</th>
                                            <th>Slug</th>
                                            <th>Home</th>
                                            <th>Ngày tạo</th>
                                            <th>Mô tả</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($categories)) :?>
                                            <?php foreach($categories as $category): ?>
                                                <tr>
                                                    <td align="center"><img src="/Project-1/public/uploads/<?= $category['image'] ? : 'no-image.png' ?>" width = "100" alt=""></td>
                                                    <td><?= $category['name']?></td>
                                                    <td><?= $category['slug']?></td>
                                                    <td><?= $category['is_home'] ? 'yes' : 'no' ?></td>
                                                    <td><?= $category['created_at']?></td>
                                                    <td><?= $category['description']?></td>
                                                    <td>
                                                        <a href="index.php?module=backend&controller=category&action=edit&id=<?=$category['id']?>">Sửa |</a>
                                                        <a href="index.php?module=backend&controller=category&action=delete&id=<?=$category['id']?>" onclick="return confirm('Bạn có muốn xóa ?')">Xóa</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else :?>
                                            <h2>Không có danh mục nào</h2>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                        </div>
                </div>
              </div>  
        </div>
    </div>
</div>