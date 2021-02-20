<?php include("config.php"); ?>
<?php
	$sql = "SELECT * FROM brand";
	$query2 = mysqli_query($db, $sql);
?>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<title>Tambah Mobil</title>
</head>

<form action="" method="POST" enctype="multipart/form-data">
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Form Tambah Mobil</div>
					</div>
<!-- form here -->	
					<div class="card-body">
						<div class="form-group">
							<label>Nama<span class="text-danger">*</span></label>
							<input type="text" name="name" class="form-control" required>
							<p></p>
						</div>
						
						<div class="form-group">
							<label for="Nama Brand">Nama Brand<span class="text-danger">*</span></label>
							<select name="brand">
											<?php while($data = mysqli_fetch_assoc($query2) ){?>

								    <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>

								   <?php } ?>
							</select>
							<p></p>

						</div>

						<div class="form-group">
							<label>Gambar<span class="text-danger">*</span></label>
							<input type="file" name="fileunggah" class="form-control-file" required>
						</div>
						<div class="form-group">
							<label>Color<span class="text-danger">*</span></label>
							<input type="text" name="color" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Description<span class="text-danger">*</span></label>
							<input type="text" name="description" class="form-control" required>
						</div>
						<div class="form-group">
							<label>create_time<span class="text-danger">*</span></label>
							<input type="datetime-local" name="create_time" class="form-control" required>
						</div>
						<div class="form-group">
							<label>update_time<span class="text-danger">*</span></label>
							<input type="datetime-local" name="update_time" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Stock<span class="text-danger">*</span></label>
							<input type="number" name="stock" class="form-control" required>
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
		$brand = $_POST['brand'];
		$color = $_POST['color'];
		$description = $_POST['description'];
		$create_time = $_POST['create_time'];
		$update_time = $_POST['update_time'];
		$stock = $_POST['stock'];

		$filename = $_FILES['fileunggah']['name'];

	    // destination of the file on the server
	    $destination = 'upload/' . $filename;

	    // get the file extension
	    $extension = pathinfo($filename, PATHINFO_EXTENSION);

	    // the physical file on a temporary uploads directory on the server
	    $file = $_FILES['fileunggah']['tmp_name'];
	    $size = $_FILES['fileunggah']['size'];

	    if (!in_array($extension, ['rar','png','PNG','jpg','JPG','jpeg','JPEG','zip','xlsx', 'pdf', 'docx'])) {
	        echo "You file extension must be rar,png,jpg, jpeg .zip, .pdf or .docx";
	    } elseif ($_FILES['fileunggah']['size'] > 4000000) { // file shouldn't be larger than 1Megabyte
	        echo "File too large!";
	    } else {
	        // move the uploaded (temporary) file to the specified destination
	        if (move_uploaded_file($file, $destination)) {
	           $db->query("INSERT INTO cars (name, brand_id, image, color, description, create_time, update_time, stock) VALUES ('$nama', '$brand', '$filename','$color' ,'$description' ,'$create_time' ,'$update_time' ,'$stock')");
	           echo "<script> window.location='index.php?action=berhasil' </script>";
	     
	        } else {
	        	echo "<script> window.location='index.php?action=gagal' </script>";
	        }
	    }
	}
?>