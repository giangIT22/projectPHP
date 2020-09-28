<list-product>
    <div class="container">
        <div class="titlePrimary">
            Danh sách sản phẩm trong giỏ hàng
        </div>
        <div>
        	<br/>
        	<form action="index.php?controller=cart&action=update" method="post">
        		<table width="100%" border="1" cellpadding="0" cellspacing="0">
        		<tr height='30'>
        			<td align="center">ID</td>
        			<td>Tên sản phẩm</td>
        			<td align="center">Giá sản phẩm</td>
        			<td align="center">Số lượng</td>
        			<td align="center">Thành tiền</td>
        			<td>Hành động</td>
        		</tr>	
                <?php if(!empty($products)) : 
                    foreach ($products as $product): ?>
        			<tr height='30'>
	        			<td align="center"><?= $product['id'] ?></td>
	        			<td><?= $product['name'] ?></td>
	        			<td align="center"><?= number_format($product['price'], 0) ?></td>
	        			<td align="center" width="150">
	        				<input type="text" name="qty[<?= $product['id'] ?>]" 
	        					value="<?= $product['qty'] ?>" 
	        					style="padding: 5px;border : none;">
	        			</td>
	        			<td align="center"><?= number_format(($product['price'] * $product['qty']), 0) ?></td>
	        			<td align="center" width="100"><a onclick="return confirm('Bạn có muốn xóa không ?')" href="index.php?controller=cart&action=delete&id=<?= $product['id'] ?>">Xóa</a></td>
	        		</tr>	
        		<?php endforeach; endif; ?>
        		</table>
        		<p align="right">
        			<a  href="index.php?controller=cart&action=destroy" onclick="return confirm('Bạn có muốn xóa tất cả không ?')">Xóa tất cả</a>
                    <a href="index.php" >Tiếp tục mua hàng</a>
                    <button>Cập nhật</button>
        		</p>
        	</form>
            <p><button onclick="showForm()">Checkout</button></p>
            <br/>
            <br/>
            <br/>

            <div class="form-order" style = "display: none;">
                <form action="index.php?controller=order&action=store" method="post">
                    <label>Tên khác hàng</label>
                    <input type="text" name="customer_name" />
                    <br/>

                    <label>Email khác hàng</label>
                    <input type="text" name="customer_email" />
                    <br/>

                    <label>Số điện thoại</label>
                    <input type="text" name="customer_phone" />
                    <br/>

                    <label>&nbsp;</label>
                    <button>Gửi đơn hàng</button>
                    <br/>
                </form>
            </div>
    </div>
</list-product>    
<style>
    .form-order label {
        width: 200px;
        float: left;
    }

    .form-order input {
        padding: 5px;
        width: 200px;
        margin-bottom: 10px;
    }
</style>

<script>
    function showForm() {
        $(".form-order").fadeToggle(100);
    }
</script>