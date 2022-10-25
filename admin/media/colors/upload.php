<!DOCTYPE html>
<html>
<head>
	<!-- Responsive meta tag-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Multi File Upload, Add to databaase and view in PHP and MySQL</title>

	<!--Style sheets-->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

	<!--Custom styles-->


	<!--Font icons-->
</head>
<body>

	

	<!--Main Container-->
	<div class="container">
		<div class="upload" >
			<h3 class="text-primary" align="center">Upload Content</h3>
			<hr />
			<?php
			if (isset($_GET['success'])) {
				# code...
				?>
				<div class="alert alert-success">Content have been uploaded!</div>
				<?php
			}elseif (isset($_GET['error'])) {
				# code...
				?>
				<div class="alert alert-danger">Content failed to upload!</div>
				<?php
			}else{

			}
			?>
			<form method="post" action="action.php" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-12">
						<label>Content name</label>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-music"></i></span>
							<input type="text" class="form-control" placeholder="Enter content name" aria-label="Enter content name" aria-describedby="basic-addon1" name="song_name" required>
						</div>
					</div>
					<div class="col-md-6">
						<label>Sounds File <small><b>(MP3, AVI, ACC)</b></small></label>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-upload"></i></span>
							<input type="file" class="form-control" placeholder="Enter sonud name" aria-label="Enter sound name" aria-describedby="basic-addon1" name="song_file" accept="audio/*" required>
						</div>
					</div>
					<div class="col-md-6">
						<label>Image <small><b>(JPG, PNG, BMP)</b></small></label>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-image"></i></span>
							<input type="file" class="form-control" placeholder="Enter Image of content" aria-label="Enter Image of content" aria-describedby="basic-addon1" name="cover_art" accept="image/*" required>
						</div>
					</div>
					
					<div class="col-md-6">
						<button type="submit" class="btn btn btn-primary" name="btn-upload">Upload now</button>
					</div>
				</div>
			</form>
		</div>
		
	</div>

<!-- Core javascript files-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>