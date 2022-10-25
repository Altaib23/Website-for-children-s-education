<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
	<!-- Responsive meta tag-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>الحروف العربية</title>
	
	<!-- Favicon -->
	<link href="/img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="/lib/animate/animate.min.css" rel="stylesheet">
	<link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="/css/style.css" rel="stylesheet">

	<!--Style sheets-->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">


	<!--Font icons-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>


	<!--Main Container-->
	<div class="container">
		<!-- Spinner Start -->
		<div id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">...جاري التحميل</span>
      </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
      <a href="/home.php" class="navbar-brand">
        <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>    تعليم الاطفال   </h1>
      </a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
      
      </div>
    </nav>
    <!-- Navbar End -->
		<div class="card">
			<center>
				<h3 class="text-primary">الحروف العربية</h3>
			</center>
			<hr />
			<div class="row">
				<?php
				include "../database.php";
				$sql = "SELECT * FROM arbletter ORDER BY songID DESC Limit 28";
				$result = $conn->query($sql);
				include "function.time-ago.php";
				if ($result->num_rows > 0) {
					// output data of each row
					while ($row = $result->fetch_assoc()) {
						$timeago = get_timeago(strtotime($row['songDate']));
				?>
						<div class="col-md-3 raised">

							<a href="download.php?music=<?php echo $row['songID']; ?>" style="text-decoration: none;" class="text-center">
								<img src="uploads/cover/<?php echo $row['songCover']; ?>" width="100%" height="250px">
								<h5><?php echo $row['songName']; ?></h5>
							</a>
						</div>
					<?php
					}
				} else {
					?>
					<div class="col-md-12">
						<center>
							<p>No song in database</p>
						</center>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>

	<!-- Core javascript files-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>