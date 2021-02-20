<?php include("config.php"); ?>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<title>Tambah Customer</title>
</head>

<form action="" method="POST">
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Form Tambah Customer</div>
					</div>
<!-- form here -->	
					<div class="card-body">
						<div class="form-group">
							<label>Nama<span class="text-danger">*</span></label>
							<input type="text" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email<span class="text-danger">*</span></label>
							<input type="text" name="email" class="form-control" required>
							<p class="help-block">Isi dengan Email anda</p>
						</div>
						<div class="form-group">
							<label>Address<span class="text-danger">*</span></label>
							<input type="text" name="alamat" class="form-control" required>
							<p class="help-block">Isi dengan Alamat anda</p>
						</div>
					</div>
					<div class="card-footer">
							<button type="submit" name="add" class="btn btn-info">Submit</button>
								 <a class="btn btn-default float-right" href="index.php"><i class="fa fa-arrow-left"></i> Kembali</a>
						</div>
						</div>
				</div>

			</div>
		</div>
	</section>
</form>

<?php
	if (isset($_POST['add'])) {
		$nama = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['alamat'];

	    $db->query("INSERT INTO customer (name,email,address) VALUES ('$nama', '$email', '$address')");
	    if ($db) {
	        header('location: index.php?action=sukses');
	    }
	    else{
	        header('location: index.php?action=gagal');
	    }
	}
?>