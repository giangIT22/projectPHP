<?php
	view('partitions.backend.header');
    view('partitions.backend.sidebar');
?>

<div class="main-panel">
	<div class="content-wrapper">
	    <div class="row" style="width: 100%;">
	    	<div class="col-md-12 stretch-card">
	        	<form action="index.php?module=backend&controller=product&action=uploadImage&id=<?= $product['id'] ?? null ?>" style="width: 100%;" method="post" enctype="multipart/form-data">
	            	<div class="card">
				    <div class="card-body">
				    <div class="card-title">Upload Ảnh Sản Phẩm</div>

				    <div class="card-body" style="padding: 0 8px 0 8px">
				    	<div class="form-group row">
						    <label class="col-sm-2 col-form-label">Chọn ảnh</label>
						    <div class="col-sm-10">
						        <input type="file" name="image" class="form-control" value="<?= $_POST['name'] ?? $product['name'] ?? '' ?>">
						        <span class="small text-danger"><?= $errors['image'] ?? '' ?></span>
						    </div>
						</div>

						<div>
                            <a href = "index.php?module=backend&controller=product" class="btn btn-success" style="float: right; margin-left: 10px;">Trở lại</a>
							<button type="submit" class="btn btn-success" style="float: right;">Upload</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		</div>
	        <div class="col-md-12 stretch-card">
	            <div class="card">
				    <div class="card-body">
				    <div class="card-title">
				    	Ảnh sản phẩm
				    </div>

				    <table id="recent-purchases-listing" class="table">
						<thead>
							<tr>
								<th>Hình ảnh</th>
							    <th>Ngày tạo</th>
							    <th>Hành động</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($images as $image): ?>
								<tr>
									<td>
										<img src="/Project-1/public/uploads/<?= $image['name'] ? $image['name'] : 'no-image.jpg' ?>">
									</td>
									<td><?= $image['created_at'] ?></td>
									<td width="100">
										<a href="index.php?module=backend&controller=product&action=deleteImage&id=<?= $image['id'] ?>&product_id=<?= $product['id'] ?>" onclick="return confirm('Bạn có chắc chắn xóa không?') " title="Xóa danh mục">Xóa</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
	        </div>
	    </div> 
	  </div>
	</div>
</div>

<?php view('partitions.backend.footer'); ?>