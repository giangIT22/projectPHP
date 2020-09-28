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
?>

<div class="card">
    <div class="card-body">
	    <div class="card-title">
	    	Thông tin chi tiết
	    	<a href="index.php?module=user" style="float: right">
	    		Quay lại
	    	</a>
	    </div>

		<?php if (!empty($user)): ?>	    
    	<form action="index.php?module=user&action=edit&id=<?= $_GET['id'] ?? '' ?>" method="post" enctype="multipart/form-data">
	        <?php require_once './views/users/form.php'; ?>
	    </form>
	    <?php else: ?>
	    	<p>Không tìm thấy thành viên</p>
	    <?php endif; ?>
</div>