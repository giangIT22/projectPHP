<!DOCTYPE html>
<html>
<head>
	<title>Demo Upload File In PHP</title>
</head>
<body>
	<h3>Form Upload File</h3>
	<form method="post" action="" enctype="multipart/form-data">
		<input type="file" name="img" />
		<button name="btn-upload">Upload File</button>
	</form>
	<?php
		if (isset($_POST['btn-upload'])) {
			if (!empty($_FILES['img']['name'])) {
				$ext = explode('.', $_FILES['img']['name'])[1];
				move_uploaded_file($_FILES['img']['tmp_name'], './images/' . time() . ".{$ext}");
			} else {
				echo 'Bạn chưa chọn ảnh!';
			}
		}
	?>
</body>
</html>