<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                                <div class="card-title">
                                        Danh sách sản phẩm
                                        <a href="index.php?module=backend&controller=product&action=create" style = "float:right;">Thêm mới</a>
                                </div>
                                <table id="recent-purchases-listing" class="table dataTable no-footer" role="grid">
                                    <thead>
                                        <tr>
                                            <th>Hình ảnh</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá tiền</th>
                                            <th>Danh mục</th>
                                            <th>Ngày tạo</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($products)) :?>
                                            <?php foreach($products as $product): ?>
                                                <tr>
                                                    <td align="center"><img src="/Project-1/public/uploads/<?= $product['image'] ? : 'no-image.png' ?>" width = "100" alt=""></td>
                                                    <td><?= $product['name']?></td>
                                                    <td><?= number_format($product['price']) ?></td>
                                                    <td><?= $product['category_name']?></td>
                                                    <td><?= $product['created_at']?></td>
                                                    <td>
                                                        <a href="index.php?module=backend&controller=product&action=addImage&id=<?=$product['id']?>">Thêm ảnh |</a>
                                                        <a href="index.php?module=backend&controller=product&action=edit&id=<?=$product['id']?>">Sửa |</a>
                                                        <a href="index.php?module=backend&controller=product&action=delete&id=<?=$product['id']?>" onclick="return confirm('Bạn có muốn xóa ?')">Xóa</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else :?>
                                            <h2>Không có sản phẩm nào</h2>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                        </div>
                </div>
              </div>  
        </div>
    </div>
</div>