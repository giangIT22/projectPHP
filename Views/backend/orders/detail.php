<?php
	view('partitions.backend.header');
    view('partitions.backend.sidebar');
?>

<div class="main-panel">
	<div class="content-wrapper">
	    <div class="row" style="width: 100%;">
	    	<div class="col-md-12 stretch-card">
	            	<div class="card">
				    <div class="card-body">
				    <div class="card-title">Chi tiết đơn hàng</div>

				    <div class="card-body">
				    	<div class="form-group row">
						    <label class="col-sm-2 col-form-label">Mã đơn hàng</label>
						    <div class="col-sm-10"><?= $order['code'] ?? null ?></div>
						</div>

						<div class="form-group row">
						    <label class="col-sm-2 col-form-label">Ngày tạo</label>
						    <div class="col-sm-10"><?= $order['created_at'] ?? null ?></div>
						</div>

						<div class="form-group row">
						    <label class="col-sm-2 col-form-label">Tên khách hàng</label>
						    <div class="col-sm-10"><?= $order['customer_name'] ?? null ?></div>
						</div>

						<div class="form-group row">
						    <label class="col-sm-2 col-form-label">Email khách hàng</label>
						    <div class="col-sm-10"><?= $order['customer_email'] ?? null ?></div>
						</div>

						<div class="form-group row">
						    <label class="col-sm-2 col-form-label">Số điện thoại</label>
						    <div class="col-sm-10"><?= $order['customer_phone'] ?? null ?></div>
						</div>	
					</div>
				</div>
			</div>

		</div>

	        <div class="col-md-12 stretch-card">
	            <div class="card">
				    <div class="card-body">
				    <div class="card-title">
				    	Danh sách sản phẩm
				    </div>

				    <table id="recent-purchases-listing" class="table">
						<thead>
							<tr>
								<th>Tên sản phẩm</th>
							    <th>Giá tiền</th>
							    <th>Số lượng</th>
							    <th>Thành tiền</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($products as $product): ?>
								<tr>
									<td><?= $product['product_name'] ?></td>
									<td><?= $product['product_price'] ?></td>
									<td><?= $product['product_qty'] ?></td>
									<td><?= number_format($product['product_qty']  * $product['product_price']) ?></td>	
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